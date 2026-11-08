<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ResorceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderByDesc('id')->paginate(6);
        return view('admin.posts.post',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.add-post');
    }


    private function handleUpload($request,$field,$deleteField,$oldImage,$folder='postsImg'){

        if($request->hasFile($field)){
            if($oldImage){
                Storage::disk('public')->delete($folder.'/'.$oldImage);
            }
            $file = $request->file($field);
            $name=Str::uuid().'-'.time().'.'.$file->getClientOriginalExtension();
            $file->storeAs('postsImg',$name,'public');
            return $name;
        }
        
        
        if($request->boolean($deleteField)){
            if($oldImage){
                Storage::disk('public')->delete($folder.'/'.$oldImage);
            }
            return null;
        }

        
        return $oldImage;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $data =$request->validated();
        

       $post= Post::create([
        'image1'=>$this->handleUpload($request,'image1',null,null),
        'image2'=>$this->handleUpload($request,'image2',null,null),
        'image3'=>$this->handleUpload($request,'image3',null,null),
        'profImg'=>$this->handleUpload($request,'profImg',null,null),
        'slug'=>Str::slug($data['en']['title'])?? $data['nl']['title']
        
       ]); 
       foreach(['en','nl'] as $locale){
            if(! empty($data[$locale]['title'])){
                $post->translateOrNew($locale)->fill($data[$locale]);
            }
       }
    
       $post->save();
       

        return to_route('admin.resorses.resorse')->with('success','Article created successfully');

    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.edit-post',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, $id)
    {
        
        $poste = Post::findOrFail($id);
        $data = $request->validated();
        $poste->image1 = $this->handleUpload($request,'image1','delete_img1',$poste->image1);
        $poste->image2 = $this->handleUpload($request,'image2','delete_img2',$poste->image2);
        $poste->image3 = $this->handleUpload($request,'image3','delete_img3',$poste->image3);
        $poste->profImg = $this->handleUpload($request,'profImg','delete_profImg',$poste->profImg);
        $poste->save();

        if(!empty($data['en']['title'])){
            $newSlug = Str::slug($data['en']['title']);
        }

        foreach(['en','nl'] as $lang){
            if(! empty($data[$lang]['title'])){
                $poste->translateOrNew($lang)->fill($data[$lang]);
            }
        }
             
        
       $poste->save(); 
    

       return back()->with('success','The article was successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $poste = Post::findOrFail($id);
        $poste->delete();
        return to_route('admin.resorses.resorse')->with('success','Post successfully deleted');
    }

    public function status($id)
    {
        $item = Post::findOrFail($id);
       
        $item->status = $item->status == 1 ? 0 : 1;
       
        $item->save();   
        
        return to_route('admin.resorses.resorse')->with('success','The status change was successful.');
    }

    public function searchPost(Request $request)
    {
        $search = $request->search;
        $posts = Post::with('translations')->whereHas('translations',function($q) use ($search) {
            $q->where('title','LIKE', "%{$search}%");
        })->paginate(3);
        
        return view('admin.posts.post' , compact('posts'));

    }
}
