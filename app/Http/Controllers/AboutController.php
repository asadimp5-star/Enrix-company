<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.site-content.about-us.about-us');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    private function handleUpload($request,$field,$deleteField,$oldImage,$folder='aboutImg'){

        if($request->hasFile($field)){
            if($oldImage){
                Storage::disk('public')->delete($folder.'/'.$oldImage);
            }
            $file = $request->file($field);
            $name=Str::uuid().'-'.time().'.'.$file->getClientOriginalExtension();
            $file->storeAs('aboutImg',$name,'public');
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

    private function syncBlocks($page , array $blocks)
    {
        
        $page->blocks()->delete();
        

        foreach($blocks as $index => $blocksData){
           
            $block = $page->blocks()->create([
                'type'=>$blocksData['type'] ?? 'checklist',
                'sort_order'=>$index,
            ]);
            foreach(['en','nl'] as $locale){
                $trans= $block->translateOrNew($locale);
                $trans->lable = $blocksData[$locale]['lable'] ?? null;

                $item = array_values(array_filter(array_map('trim',$blocksData[$locale]['items'] ?? [])));
                $trans->items = $item;
            }
            $block->save();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutRequest $request)
    {
        $request->validated();
        $page = About::create([
        'image1'=>$this->handleUpload($request,'image1',null,null),
        ]);

        foreach(['en','nl'] as $locale){
            $page->translateOrNew($locale)->title = $request->input("$locale.title");
            $page->translateOrNew($locale)->desc = $request->input("$locale.desc");
        }
        $page->save();

        $this->syncBlocks($page, $request->blocks ??[]);

        return to_route('admin.content.index')->with('success','ok');
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
    public function edit(About $id)
    {
        $abouts = $id;
        return view('admin.site-content.about-us.edit-aboutus',compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutRequest $request,$id)
    {
        $request->validated();
        $page = About::findOrFail($id);
        
        $page->image1 = $this->handleUpload($request,'image1','delete_img1',$page->image1);
        
        $page->save();
        
        foreach(['en','nl'] as $locale){
            $page->translateOrNew($locale)->title = $request->input("$locale.title");
            $page->translateOrNew($locale)->desc = $request->input("$locale.desc");
        }
        $page->save();

        $this->syncBlocks($page, $request->blocks ??[]);

        return back()->with('success','about page is updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
