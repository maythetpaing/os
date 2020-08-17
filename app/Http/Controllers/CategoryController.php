<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('backend.categories.index',compact('categories'));
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
       return view('backend.categories.create');
        // to retrieve data from subcategory
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'name'=>'required',
            'photo'=>'required',
            


        ]);
        //if include file,upload
        $imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/categoryimg'),$imageName);
        $myfile='backend/categoryimg/'.$imageName;
        //data insert
        $category=new Category;
         // $item->table-column=$request->form input type name;
        
        $category->name=$request->name;
        $category->photo=$myfile;
        
        
        $category->save();
        //redirect
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view('backend.categories.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $categories =Category::find($id);
        return view('backend.categories.edit',compact('categories'));
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
       $request->validate([
            
            'name'=>'required',
            'photo'=>'sometimes',
            


        ]);
        //if include file,upload
         if($request->hasFile('photo')){
        $imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/categoryimg'),$imageName);
        $myfile='backend/categoryimg/'.$imageName;
        unlink($request->oldphoto);
    }
        else{
            $myfile=$request->oldphoto;
        }
        //data insert
        $category=Category::find($id);
         // $item->table-column=$request->form input type name;
        
        $category->name=$request->name;
        $category->photo=$myfile;
        
        $category->save();
        //redirect
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $category=Category::find($id);
        $category->delete();
        //redirect
        return redirect()->route('categories.index');
    }
}
