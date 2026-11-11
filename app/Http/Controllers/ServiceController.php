<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function serviceIndx()
    {
        return view('admin.site-content.services.services');
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

    public function store(Request $request)
    {
        
        $request->all();
        $page = Service::create([]);

        foreach(['en','nl'] as $locale){
            $page->translateOrNew($locale)->title = $request->input("$locale.title");
            $page->translateOrNew($locale)->desc = $request->input("$locale.desc");
        }
        $page->save();

        $this->syncBlocks($page, $request->blocks ??[]);

        return to_route('admin.content.services')->with('success','ok');
    }

    public function servicePage(Service $id)
    {
        $serve = $id;
        return view('admin.site-content.services.services-edit',compact('serve'));        
    }

    public function update(Request $request,$id)
    {
        
        $page = Service::findOrFail($id);
        
        foreach(['en','nl'] as $locale){
            $page->translateOrNew($locale)->title = $request->input("$locale.title");
            $page->translateOrNew($locale)->desc = $request->input("$locale.desc");
        }
        $page->save();

        $this->syncBlocks($page, $request->blocks ??[]);

        return back()->with('success','service page is updated.');

    }
    
}
