<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuitems = MenuItem::all();
        return view('menuItems.menuItemIndex',compact('menuitems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menuItems.createItem');
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
            'foodname' => 'required',
            'price' => 'required',
            'category' => 'required',
            'description' => 'required',
            'status' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'quantity' => 'required',
            'alert_stock' => 'required',
        ]);

        $imageName = time() . ".".$request->image->extension();
        $request->image->move(public_path('images'), $imageName);


        MenuItem::create([
            'foodname' => $request->foodname,
            'status' => $request->status,
            'price' => $request->price,
            'description' => $request->description,
            'category' => $request->category,
            'image' => $imageName,
            'quantity' => $request->quantity,
            'alert_stock' => $request->alert_stock,
        ]);
        return redirect()->route('menu_items.index')->with('success message', 'Food Added!!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function show(MenuItem $menuItem)
    {
        return view('menuItems.showItem',compact('menuItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuItem $menuItem)
    {
        return view('menuItems.editItem',compact('menuItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuItem $menuItem)
    {
        $request->validate([
            'foodname' => 'required',
            'price' => 'required',
            'category' => 'required',
            'description' => 'required',
            'status' => 'required',
            'quantity' => 'required',
            'alert_stock' => 'required',
        ]);


        $menuItem->update($request->all());
        return redirect()->route('menu_items.index')->with('success message', 'Food Added!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuItem $menuItem)
    {
        $menuItem->delete();
        return redirect()->route('menu_items.index')->with('success','Product deleted Successfully!');
    }
}
