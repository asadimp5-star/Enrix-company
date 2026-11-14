<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorieRequest;
use App\Models\Storie;
use Illuminate\Http\Request;

class StorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($local)
    {
        return view('admin.stories.add-new-story');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($local,StorieRequest $request)
    {
        $data =$request->validated();
        

       $post= Storie::create([]); 
    
       foreach(['en','nl'] as $locale){
            if(! empty($data[$locale]['title'])){
                $post->translateOrNew($locale)->fill($data[$locale]);
            }
       }
    
       $post->save();
       

        return to_route('admin.customer.index')->with('success','new stories created successfully');
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
    public function edit($local,$id)
    {
        $story = Storie::findOrFail($id);
        return view('admin.stories.edit-story',compact('story'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($local,StorieRequest $request,$id)
    {
        $poste = Storie::findOrFail($id);
        $data = $request->validated();

        foreach(['en','nl'] as $lang){
            if(! empty($data[$lang]['title'])){
                $poste->translateOrNew($lang)->fill($data[$lang]);
            }
        }
             
        
       $poste->save(); 
    

       return back()->with('success','The story was successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($local,$id)
    {
        $poste = Storie::findOrFail($id);
        $poste->delete();
        return to_route('admin.customer.index')->with('success','story successfully deleted');
    }

    public function status($local,$id)
    {
        $item = Storie::findOrFail($id);
       
        $item->status = $item->status == 1 ? 0 : 1;
       
        $item->save();   
        
        return to_route('admin.customer.index')->with('success','The status change was successful.');
    }
}
