<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\brand;
use App\Models\item;
use App\Models\cart;
use Illuminate\support\Facades\DB;
use Session;

class product extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    public function addcart(Request $req)
    {
      
       if($req->session()->has('sname'))
       {    $qty=request('qty');
        // echo "$qty";
           $c = new cart;
          
           $c->productid=$req->item;
           $c->userid=session('sname')->id;
           $c->qty=$qty;
        //    echo "$c";
           $c->save();
           echo "<script>alert('product added Successfully to the cart');window.location='/CHome';</script>";
       }
       else
       {
           return redirect('/Login');
       }
    }

    public function productdetails($id)
    {
        $data=item::find($id);
        return view('productdetails',['product'=>$data]);
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
        //
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
        cart::destroy($id);
    echo "<script>alert('Item removed Successfully from the cart');window.location='/cart';</script>";
    }

    function cartlist()
    {
        $userid=session::get('sname')['id'];
        $item=DB::table('carts') 
        ->join('items','carts.productid','=','items.id')
        ->where('carts.userid',$userid)
        ->select('items.*','carts.id as cart_id')
        ->get();

        return view('cart',['item'=>$item]);
    }

    // function checkout(){
    //     $userid=session::get('sname')['id'];
    //    $total= $item=DB::table('carts') 
    //     ->join('items','carts.productid','=','items.id')
    //     ->where('carts.userid',$userid)
    //     ->select('items.*','carts.id as cart_id')
        
    //     ->get();
        
    //     // return view('cart',['item'=>$item]);
    //     return view('/checkout',['total'=>$total]);
    // }
}


