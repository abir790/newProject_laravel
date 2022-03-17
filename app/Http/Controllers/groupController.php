<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Group;

class groupController extends Controller
{
    public function index(){
    	$group=Group::all();

    	return view('group.index',compact('group'));

    }
        public function create(){
        return view('group.create');
    }
        public function store(Request $request){
                $a=$request->all();
                if(Group::create($a)){  // model diye insert hosce tai filable kortei hobe model e giye .. request diye korle filable need cilo na ... request diye mane as like $data->c=$request->c;
                session()->flash('create','Create successfully');
                return redirect()->to('group');
                }else{
                session()->flash('delete','Not Created');
                return redirect()->to('group');

                }
    }
        public function delete($id){
            
/*            if(Group::find($id)->delete()){ // ctrk shift \    for multiple line comments
                session()->flash('delete','Delete successfully');
                return redirect()->to('group');
            }*/

                        if(Group::find($id)->delete()){ // ctrk shift \    for multiple line comments
                Session::flash('delete','Delete successfully');
                return redirect()->to('group');
            }

            }


}
