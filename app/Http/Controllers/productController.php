<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Product;
use App\Category;
use Auth;

class productController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $product =Product::all();
        return view('products.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$product=Product::all();
       
        $catt=[];
        $category=Category::all();
        foreach($category as $cat){
            $catt[$cat->id]=$cat->title;
        }
        return view('products.form',compact('category','catt')); // compact('catt')); sudhu etao hoy majhe majhe
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=$request->all();
        $product=Product::create($product);
        if($product){
            session::flash('create',"Product create successfully");
            return redirect()->to('products');
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
        $product=Product::findOrFail($id);
        return view('products.show',compact('product'));
        //return "show";
        //return view('products.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catt=[];
        $category=Category::all();
        foreach($category as $cat){
            $catt[$cat->id]=$cat->title;
        }
        $product=Product::findOrFail($id);
        return view('products.form',compact('product','category','catt'));
        //return $id;
        //return $product->title;

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
        //$pro_update=$request->all();
        //return $id;
        $pro_update=Product::findOrFail($id)->update([
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'description'=>$request->description,
            'cost_price'=>$request->cost_price,
            'price'=>$request->price,

        ]);
        if($pro_update){
            session::flash('update',"product Update successfully");
            return redirect()->to('products');
        }else{
            return "not Update";
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
        $delete=Product::findOrFail($id)->delete();
        if($delete){
            session::flash('delete',"Product Delete Successfully");
            return redirect()->to('products');
        }
    }
}
