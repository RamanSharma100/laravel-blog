<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;

class adminController extends Controller
{


    public function renderAdmin(){
        if(Auth::check()){
            return redirect()->to('admin/dashboard');
        }else{
            return redirect()->to('admin/login');
        }
    }


    public function create(Request $request){

    	// validation

    	$request->validate([
    		'name' => 'required',
    		'username' => 'required|unique:users',
    		'email' =>  'required|unique:users',
    		'password' => 'required|min:6',
    		'confirmPass' => 'required|same:password'
    	]);

    	// insert data

    	$hashedPass = Hash::make($request->password);

    	$newUser = User::insert([
    		'name' => $request->name,
    		'username' => $request->username,
    		'email' => $request->email,
    		'password'=> $hashedPass
    	]);

    	if($newUser){
    		$request->session()->flash('success','User is Registered Successfully'); 
    		return view('admin.register');
    	}else{
    		$request->session()->flash('error','Something went wrong');
    		return view('admin.register');
    	}

    }

    public function login(Request $request){

    	// validation

    	$request->validate([
	        'username' => 'required',
	        'password' => 'required',
	    ]);

	    $user = User::where('username','=',$request->username)->first();
        if(is_null($user)){
            $request->session()->flash('loginError','Invalid email or password');
            return redirect()->back();
        }else{
            $hashedPassword = $user->password;
            if(Hash::check($request->password, $hashedPassword)){
                if (Auth::loginUsingId(User::where('username','=',$request->username)->firstOrFail()->id)) {
                    // Success
                    return redirect()->to('admin/dashboard');
                }
            }else{
                $request->session()->flash('loginError','Invalid password'); 
                return redirect()->back();
            }

        }
	    

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->flash('success','User is Logged out Successfully');
        return redirect()->to('admin/login');
    }
}
