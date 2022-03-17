<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Group;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $user=User::all();
/*                 foreach($user as $us){
                 echo "ggg" .$us->group;

            }
*/

        
        return view('user.index',compact('user'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gro=[]; // dekhte hobe aktu vedio ta
        $group=Group::all();
        foreach ($group as $grop) {
            $gro[$grop->id]=$grop->title;
        }
         return view('user.create',compact('group','gro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required'
        ]);
        //$user=new User;
        echo "hhhi :".$request->name;
        $user=$request->all();
        if (User::create($user)) {
            session()->flash('create','Create Successfully');
            return redirect()->To('users');
        }else{
            echo "not created";
        }
       // User::create($user);
                //redirect()->To('')
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::find($id);
        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        $gro=[]; // akta array nilam then etar vitor data rekhe pass kore dibo selected shrtcut er jnno r collective form use korar jonno 
        $group=Group::all();
        foreach ($group as $grop) {
            $gro[$grop->id]=$grop->title;
        }
        $edit['edi']='e'; // akhane  diye o form e change korte pari isset($edit)/or if($edi='e')
        return view('user.create',compact('user','gro'),$edit); // dekhe hobe 

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
        $user=User::findOrFail($id)->update([
            'group_id'=>$request->group_id,
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
        ]);
        if ($user) {
        session::flash('update','Update seccessfully');
                return redirect()->to('users');
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
        $user=User::findOrFail($id)->delete();
        session::flash('delete','Delete seccessfully');
        return redirect()->to('users');
    }
}
