<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        // Image Upload
        $imagename = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imagename);

        // New Post create
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
            return back()->with( 'success', 'Successfully your  registration' ); 
        }else{
            return back()->with( 'fail', 'Something wrong please try agin' ); 
        }

    }

    public function loginStore( Request $request ) {

        $credentials = $request->validate([
                    'email' => 'required|email',
                    'password' => 'required',
                ]);
        
                // return $credentials;
        
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                
                if(Auth::user()->role=== 'admin') {
                    return redirect()->route('admin.dashboard');
                }
                    return redirect()->route('client.dashboard');
        
                } else {
                    return back()->with('fail', 'Credentials not matched.');
                }
            }

    
}
