<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::orderByDesc('id')->paginate(5);
        return view('admin.customers.customer',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customers.add-customer');
    }


    private function handleUpload($request,$field,$oldImage,$folder='customerImg'){

        if(!$request->hasFile($field) && $oldImage){
            
            return $oldImage;
        }
        
        if($request->hasFile($field)){
            if($oldImage){
                Storage::disk('public')->delete($folder.'/'.$oldImage);
            }
            $file = $request->file($field);
            $name=Str::uuid().'-'.time().'.'.$file->getClientOriginalExtension();
            $file->storeAs('customerImg',$name,'public');
            return $name;
        }
        

        
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerRequest $request)
    {
        $data =$request->validated();
        

       $post= Customer::create([
        'image1'=>$this->handleUpload($request,'image1',null,null),        
       ]); 
       $post->save();
       foreach(['en','nl'] as $locale){
            if(! empty($data[$locale]['title'])){
                $post->translateOrNew($locale)->fill($data[$locale]);
            }
       }
    
       $post->save();
       

        return to_route('admin.customer.index')->with('success','new customer created successfully');
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
    public function edit($id)
    {
        $customr = Customer::findOrFail($id);
        return view('admin.customers.edit-customer',compact('customr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CustomerRequest $request,$id)
    {
        $poste = Customer::findOrFail($id);
        $data = $request->validated();
        $poste->image1 = $this->handleUpload($request,'image1',$poste->image1);
        $poste->save();

        foreach(['en','nl'] as $lang){
            if(! empty($data[$lang]['title'])){
                $poste->translateOrNew($lang)->fill($data[$lang]);
            }
        }
             
        
       $poste->save(); 
    

       return back()->with('success','The customer was successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $poste = Customer::findOrFail($id);
        $poste->delete();
        return to_route('admin.customer.delet')->with('success','customer successfully deleted');
    }

    public function status($id)
    {
        $item = Customer::findOrFail($id);
       
        $item->status = $item->status == 1 ? 0 : 1;
       
        $item->save();   
        
        return to_route('admin.customer.index')->with('success','The status change was successful.');
    }

    public function searchQue(Request $request)
    {
        $search = $request->search;
        $customers = Customer::with('translations')->whereHas('translations',function($q) use ($search) {
            $q->where('title','LIKE', "%{$search}%");
        })->paginate(5);
        
        return view('admin.customers.customer' , compact('customers'));

    }
}
