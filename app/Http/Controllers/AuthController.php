<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Author;
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
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        
        if($res){
        if(Session()->has("redirect_to_author_page")){
            
            Session()->pull("redirect_to_author_page");
            
            // return redirect()->route("author")->with("message","Registered Successfully!!");
            return view("auth.authorPage")->with("message","Registered Successfully! Fill your details");
        }
        else if($res){
            return redirect('/login')->with("message","Registered Successfully! Log In");
        }

    }
        else{
            return back()->with("message","Something went wrong");
        }
    }

    public function loginUser(Request $request){
        $user = user::where("email","=",$request->email)->first();
        $is_author = Author::where("user_id",$user->id)->first();
        // return response([$user,$is_author]);
        if($user){
            if(!Hash::check($request->password,$user->password)){
                if($is_author){
                $request->Session()->put(["loginid"=>$user,"is_author"=>true]);
                }
                else{
                    $request->Session()->put("loginid",$user); 
                }
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
            // Session()->pull("loginid");
            Session()->flush();
            // will delete all session 
            return redirect()->route("login");
        }
    }

    public function author(){
        if(Session()->has("loginid")){
            return view("auth.authorPage");
        }
        else{
            Session()->put("redirect_to_author_page",true);
            return redirect()->route("signup")->with("message","To become an Author you need to create an account");
        }
       
    }

    public function storeAuthor(Request $request){


        $author = new Author();
        $user = Session()->get("loginid");
        $user_id = $user->id;
        $author->avatar = $request->avatar;
        $author->description = $request->desc;
        $author->user_id = $user_id;
       
        $res = $author->save();

        if($res){
            return redirect("/login")->with("message","Author Details SuccessFul!! Login in");
        }
        else{
            return back()->with("message","something went wrong");
        }

    }
}
