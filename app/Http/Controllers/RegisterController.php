<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function show()      
    {
        return view('register');
    }

	public function store(Request $request)
    {
        $this->validate($request,[
        ]);
       
    $user= new User();
    $user->save();

            );
        return redirect('/perfil');
    }
...


	public function save_data(Request $request)
	{     
	$user = User::create($request->all());
	return redirect()->route('perfil');
	}	



}