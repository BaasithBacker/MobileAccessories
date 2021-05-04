<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;

class loginactivity extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
        public function check(Request $request)
    {
        $uname=request('name');
        $upass=request('password');
        //$name=$request->input();
        // $request->session()->put('sname',$getmail);
        // echo session('sname');
        $u=login::select('email')->where('email','like',"$uname")->first();
        
        if(!$u)
        {
            echo "invalid user";
          return redirect('/Login');
        }
        else
        {
        //echo $u->mailid;
        $p=login::select('password')->where('email','like',"$u->email")->first();
        //echo $p->password;
        
        
            if($p->password == $upass)
            {
                $ut=login::select('usertype')->where('email','like',"$u->email")->first();
                //echo $ut->usertype;
                if($ut->usertype == 'customer')
                {
                    $i=login::select('name')->where('email','like',"$uname")->first();
                    $request->session()->put('sname',$i);
                   echo "logined";
                   return redirect ('/shop');
                }
                else if($ut->usertype=='admin')
                {
                    echo "admin";
                    // $i=faculty::select('id')->where('mailid','like',"$getmail")->first();
                    // echo $i;
                   // return redirect('#');
                
                }
                }
             else
            {
                echo "invlaid user";
                return redirect('/Login');
            }
        }
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uname = request('name');
        $uemail = request('email');
        $upass = request('password');
        $ucpass = request('confirmpassword');

        //echo "added successfully";
        $l = new login();

        $l->name=$uname;
        $l->email=$uemail;
        $l->password=$upass;
        $l->usertype="customer";

        $l->save();
        return redirect('/shop');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
