<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Session;

class CustomAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.registration');
    }

    public function customlogin(Request $request)
    
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //1 select * from users where users and password
        //1 ligne

        $credentials = $request->only('email', 'password');
        if(!Auth::validate($credentials)):
            return redirect('login')
                                ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user, $request->get('remember'));

        return redirect()->intended('dashboard')->withSuccess('Connecte');
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
            'name' => 'required|max:30|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:10'
        ]
            
        );
        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect(route('login'));


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

    public function dashboard(){

        $name = "Invite";
        if(Auth::check()){
            $name = Auth::user()->name;
        }
        return view('blog.dashboard', ['name'=>$name]);
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return Redirect(route('dashboard'));
    }
}