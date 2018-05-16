<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DogService;

class DogController extends Controller
{
    
    public function __construct()
    {
        $this->photo = new DogService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imageLinks = $this->photo->randomIndex();
        return view('dogindex',['dogLinks'=> $imageLinks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function breedList()
    {
        $breedList = collect($this->photo->breedList());
       
        return view('dogbybreed',['breedList'=> $breedList]);
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
     * Display a random dog image.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function random()
    {
        $imageLink = $this->photo->random();
        return view('dogshow',['dogLink'=> $imageLink]);
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
