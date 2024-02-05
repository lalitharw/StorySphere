<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Contracts\Session\Session;
 
class AuthController extends Controller
{
    public function loginPage(){
        return view("auth.login");
    }

    public function signUpPage(){
        return view("auth.signup");
    }

    public function storeSignup(Request $request){
        $user = new user();
        $user->firstname = $request->firstname;
        $user->lastname= $request->lastname;
        $user->avatar = $request->avatar;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if(Session()->has("redirect_to_author_page")){
            return redirect()->route("author")-with("message","Registered Successfully!!");
        }

        else if($res){
            return redirect()->route("login")->with("message","Account Created Successfully! Login");
        }
        else{
            return back()->with("message","Something went wrong");
        }


    }

    public function loginUser(Request $request){
        $user = user::where("email","=",$request->email)->first();
        if($user){
            if(!Hash::check($request->password,$user->password)){
                $request->Session()->put("loginid",$user);
                return redirect()->route("home");
            }
            else{
                return back()->with("message","User not found");
            }
            // $pass = !Hash::check($request->password,$user->password);
            //     return response()->json(['pass'=>$pass]);
        }
        else{
            return back()->with("message","User not found");
        }
    }

    public function logout(){
        if(Session()->has("loginid")){
            Session()->pull("loginid");
            Session()->flush();
            return redirect()->route("login");
        }
    }

    public function author(){
        if(Session()->has("loginid")){
            return redirect("/author");
        }
        else{
           
            return redirect("/signup")->with(["message"=>"To become an Author you need to create an account","redirect_to_author_page"=>true]);
        }
       
    }
}
