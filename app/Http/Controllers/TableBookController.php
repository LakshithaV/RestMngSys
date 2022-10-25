<?php

namespace App\Http\Controllers;

use App\Models\BookTable;
use Illuminate\Http\Request;

class TableBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bookTable/bookTable');
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
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'phone' => 'required', 
            'people' => 'required',
            'date' => 'required',
            'time' => 'required',
            'people' => 'required',
            'seatingType' => 'required',
        ]);

        BookTable::create($request->all());
        return redirect()->route('showBookTable')->with('success', $request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookTable  $bookTable
     * @return \Illuminate\Http\Response
     */
    public function show(BookTable $bookTable)
    {
        //
    }

    public function showBookTable()
    {
       return view('bookTable/showBookTable');
       
    }

    public function showAllBookTable()
    {
        $records = BookTable::orderBy('date','desc')->get();
        return view('bookTable/showAllBookTable', compact('records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookTable  $bookTable
     * @return \Illuminate\Http\Response
     */
    public function edit(BookTable $bookTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookTable  $bookTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookTable $bookTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookTable  $bookTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookTable $bookTable)
    {
        //
    }

    public function Confirm(Request $rsvp)
    {
        BookTable::find($rsvp->id)->update(array('action' => 'Confirm'));

        return redirect()->route('showAllBookTable');
    }

    public function Cancelled(Request $rsvp)
    {
        BookTable::find($rsvp->id)->update(array('action' => 'Cancelled'));

        return redirect()->route('showAllBookTable');
    }

    public function Done(Request $rsvp)
    {
        BookTable::find($rsvp->id)->update(array('action' => 'Done'));

        return redirect()->route('showAllBookTable');
    }
}
