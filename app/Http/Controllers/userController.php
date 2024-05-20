<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Hash;

class userController extends Controller
{
    public function index(){
        $data = ['data' => 'data1'];
        return view('xy_shop\userReg',$data);
    }

    public function insert(Request $request){
        $username = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $users = new User();
        $users->name = $username;
        $users->email = $email;
        $users->password = Hash::make($password);
        $users->save();
        $message = "";
       
        

        return redirect()->back()->with('message','User created successfully');


          
    
        }

        public function index2(){
            return view('xy_shop\userLogin');
        }
    

        // public function user_login(Request $request){

        //      $Username = $request->Username;
        //      $Password = $request->Password;

        //      $users = users::where(['Username'=>$Username,'Password'=>$Password])->first();

        //      if($users){

        //         $message = 'User logged in successfully';     
                       
        //     }
    
        //        return redirect()->route('userLogin');
    
        // }
}
