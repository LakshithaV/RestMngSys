<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Validator;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|alphaNum|min:5'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        $records = Reservation::all();

        if(Auth::attempt($user_data)){
            if(Auth::user()->role == 'manager')
                return view('dashboard.manager', compact('records'));
            else if(Auth::user()->role == 'chef')
                return view('dashboard.chef');
            else if(Auth::user()->role == 'waiter')
                return view('dashboard.waiter');
        }
        else{
            return back()->with('error', 'WRONG LOGIN DETAILS');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
