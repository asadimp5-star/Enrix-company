<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quests = Faq::orderByDesc('id')->paginate(8);
        return view('admin.faq.faq-list',compact('quests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.add-faq');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FaqRequest $request)
    {
         
        $data = $request->validated();
       
        $frequ = Faq::create();
        foreach(['en','nl'] as $locale){
            if(! empty($data[$locale]['question'])){
                $frequ->translateOrNew($locale)->fill($data[$locale]);
            }
       }

        $frequ->save();
       return to_route('admin.FAQ.index')->with('success','FAQ created succesfuly');
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
        $quests = Faq::find($id);
        return view('admin.faq.edit-faq',compact('quests'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FaqRequest $request, $id)
    {
        $frequ =Faq::findOrFail($id);

        $data = $request->validated();

        foreach(['en','nl'] as $locale){
            if(! empty($data[$locale]['question'])){
                $frequ->translateOrNew($locale)->fill($data[$locale]);
            }
       }

        $frequ->save();
       return back()->with('success','FAQ updated succesfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $poste = Faq::findOrFail($id);
        $poste->delete();
        return to_route('admin.FAQ.index')->with('success','Post successfully deleted');
    }

    public function status($id)
    {
        $item = Faq::findOrFail($id);
       
        $item->status = $item->status == 1 ? 0 : 1;
       
        $item->save();   
        
        return to_route('admin.FAQ.index')->with('success','The status change was successful.');
    }
    public function searchQue(Request $request)
    {
        $search = $request->search;
        $quests = Faq::with('translations')->whereHas('translations',function($q) use ($search) {
            $q->where('question','LIKE', "%{$search}%");
        })->paginate(3);
        
        return view('admin.faq.faq-list' , compact('quests'));

    }
}
