<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;
use App\Subcategory;
// import swal from 'sweetalert';



class ItemController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Item::all();
        // dd($items);

        return view('backend.items.index',
        compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // for option
        // to retrieve data from brand
        $brands=Brand::all();
        // to retrieve data from subcategory
        $subcategories=Subcategory::all();
        return view('backend.items.create',compact('brands','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        //Validation
        // 'form input type name'=>'required'
        $request->validate([
            'codeno'=>'required|min:4',
            'name'=>'required',
            'photo'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'description'=>'required',
            'brand'=>'required',
            'subcategory'=>'required'


        ]);
        //if include file,upload
        $imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/itemimg'),$imageName);
        $myfile='backend/itemimg/'.$imageName;
        //data insert
        $item=new Item;
         // $item->table-column=$request->form input type name;
        $item->codeno=$request->codeno;
        $item->name=$request->name;
        $item->photo=$myfile;
        $item->price=$request->price;
        $item->discount=$request->discount;
        $item->description=$request->description;
        $item->brand_id=$request->brand;
        $item->subcategory_id=$request->subcategory;
        $item->save();
        //redirect
        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        // dd($item);
        return view('backend.items.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $brands=Brand::all();
        // to retrieve data from subcategory
        $subcategories=Subcategory::all();
        $item =Item::find($id);
        return view('backend.items.edit',compact('brands','subcategories','item'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        //validation
        $request->validate([
            'codeno'=>'required|min:4',
            'name'=>'required',
            'photo'=>'sometimes',
            'price'=>'required',
            'discount'=>'required',
            'description'=>'required',
            'brand'=>'required',
            'subcategory'=>'required'


        ]);
        //if include file,upload
        if($request->hasFile('photo')){



         $imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/itemimg'),$imageName);
        $myfile='backend/itemimg/'.$imageName;
        unlink($request->oldphoto);
    }
        else{
            $myfile=$request->oldphoto;
        }
        //data upload
        $item=Item::find($id);
         // $item->table-column=$request->form input type name;
        $item->codeno=$request->codeno;
        $item->name=$request->name;
        $item->photo=$myfile;
        $item->price=$request->price;
        $item->discount=$request->discount;
        $item->description=$request->description;
        $item->brand_id=$request->brand;
        $item->subcategory_id=$request->subcategory;
        $item->save();
        //redirect
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Item::find($id);
        $item->delete();
        // import swal from 'sweetalert';
        //redirect
        return redirect()->route('items.index');
         // unlink($request->photo);
    }
}
