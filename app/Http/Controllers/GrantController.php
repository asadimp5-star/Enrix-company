<?php

namespace App\Http\Controllers;

use App\Http\Requests\GrantRequest;
use App\Models\Grant;
use Illuminate\Http\Request;

class GrantController extends Controller
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
        return view('admin.grant-guides.add-new-grant');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($local,GrantRequest $request)
    {
        $data =$request->validated();
        

       $post= Grant::create([]); 
    
       foreach(['en','nl'] as $locale){
            if(! empty($data[$locale]['title'])){
                $post->translateOrNew($locale)->fill($data[$locale]);
            }
       }
    
       $post->save();
       

        return to_route('admin.FAQ.index')->with('success','new Grant data created successfully');
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
    public function edit($local, $id)
    {
        $grants = Grant::find($id);
        return view('admin.grant-guides.edit-grant',compact('grants'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($local,GrantRequest $request, $id)
    {
        $frequ =Grant::findOrFail($id);

        $data = $request->validated();

        foreach(['en','nl'] as $locale){
            if(! empty($data[$locale]['title'])){
                $frequ->translateOrNew($locale)->fill($data[$locale]);
            }
       }

        $frequ->save();
       return back()->with('success','Grant data updated succesfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($local, $id)
    {
        $poste = Grant::findOrFail($id);
        $poste->delete();
        return to_route('admin.FAQ.index')->with('success','Grant data successfully deleted');
    }

    public function status($local,$id)
    {
        $item = Grant::findOrFail($id);
       
        $item->status = $item->status == 1 ? 0 : 1;
       
        $item->save();   
        
        return to_route('admin.FAQ.index')->with('success','The status change was successful.');
    }
    
}
