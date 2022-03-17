<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Category;
class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Category::all();
        return view('category.categories',compact('category'));
        //return view('category.categories');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category=$request->all();
        if(Category::create($category)){
            session::flash('create',"Category Successfully added");
            return redirect()->to('category');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$category=Category::find  // ctrk shift \    for multiple line comments
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::findOrFail($id);
        return view('category.form',compact('category'));  // for collective
        //return view('category.editform',compact('category'));
        //return $id;


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
        
        $category=Category::findOrFail($id)->update([
            'title'=>$request->title,
        ]);
        if ($category) {
        session::flash('update','Update seccessfully');
                return redirect()->to('category');
               // return redirect()->to('user.edit'); ata route er link dite hobe
              //return redirect()->intened('users'); ata auth er khettre kaj korbe
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Category::find($id)->delete(); // ctrk shift \    for multiple line comments
        if($delete){
            session::flash('delete','Delete successfully');
            return redirect()->to('category');
        }

    }
}
