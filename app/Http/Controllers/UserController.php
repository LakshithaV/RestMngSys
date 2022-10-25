<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=User::all();
        return view('employee/addemployee',compact('employees'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee/createEmployee');
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
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'role' => 'required',
            'salary' => 'required',
        ]);

        User::create($request->all());
        return redirect()->route('employee.index')->with('success','Employee created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('employee.showEmployee',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('employee.editEmployee',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'role' => 'required',
            'salary' => 'required',
        ]);

        $user->update($request->all());
        return redirect()->route('employee.index')->with('success','employee update Successfully!');
    }

    
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('employee.index')->with('success','employee account deleted Successfully!');
        
    }
}
