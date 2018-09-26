<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PhonebookRequest;
use App\Phonebook;

class PhonebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('phonebook');
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
    public function store(PhonebookRequest $request)
    {
        // return $request->all();
        $phonebook = new Phonebook;

        $phonebook->name = $request->name;
        $phonebook->phone = $request->phone;
        $phonebook->email = $request->email;

        $phonebook->save();
        return response()->json(['success' =>'Your data is successfully saved'],200);
        // return $phonebook;
     }

     public function getData()
     {
        return Phonebook::orderBy('name', 'ASC')->get();
     }
    /**
     * Display the specified resource.
     *
     * @param  \App\Phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function show(Phonebook $phonebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function edit(Phonebook $phonebook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function update(PhonebookRequest $request)
    {
        $phonebook = Phonebook::find($request->id);

        $phonebook->name = $request->name;
        $phonebook->phone = $request->phone;
        $phonebook->email = $request->email;

        $phonebook->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phonebook $phonebook)
    {
        Phonebook::where('id', $phonebook->id)->delete();
    }
}
