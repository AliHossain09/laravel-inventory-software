<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registrationStore( Request $request ) {

        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'userName' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'required',
            'image'=> 'nullable |mimes:png,jpg,gift',
        ]);

        // image Upload
        $imagename = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imagename);

        // new Post create
        $User = new User;
        $User->firstName = $request->firstName;
        $User->lastName = $request->lastName;
        $User->userName = $request->userName;
        $User->email = $request->email;
        $User->password = Hash::make($request->password);
        $User->role = $request->role;
        $User->image = $imagename;
        $result = $User->save();
        
        if($result){
            return back()->with( 'success', 'Successfully Your  Registration' ); 
        }else{
            return back()->with( 'fail', 'Something Wrong Please Try Agin' ); 
        }

    }
}
