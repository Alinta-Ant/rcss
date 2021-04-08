<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookmodel;
class bookcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getbktl=request("bktl");
        $getauthor=request("author");
        $getdesc=request("desc");
        $getdist=request("dist");
        $getprice=request("price");


        echo $getbktl;
        echo "<br>";
        echo $getauthor;
        echo "<br>";
        echo $getdesc;
        echo "<br>";
        echo $getdist;
        echo $getprice;
        

        $book=new bookmodel();

        $book->bktl=$getbktl;
        $book->author=$getauthor;
        $book->desc=$getdesc;
        $book->dist=$getdist;
        $book->price=$getprice;

        $book->save();
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
