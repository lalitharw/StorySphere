<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Author;
use App\Models\blogs;

class AuthController extends Controller
{
    public function loginPage(){
        return view("auth.login");
    }

    public function signUpPage(){
        return view("auth.signup");
    }

    public function storeSignup(Request $request){
    $request->validate([
        "firstname" => "required",
        "lastname" => "required",
        "email" => "required|email|unique:users,email",
        "password"=> "required|min:8",
        "passwordConfirmation" => "required"
    ]);

        $user = new user();
        $user->firstname = $request->firstname;
        $user->lastname= $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        $request->session()->put("signid",$user);
        if($res){
        if(Session()->has("redirect_to_author_page")){
            
            Session()->pull("redirect_to_author_page");
            
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

        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
        // $author_id = 0;
        $user = user::where("email","=",$request->email)->first();
        $is_admin = $user->is_admin ?? 0;
        
        // if($user){
        // $author_id = Author::where("user_id",$user->id)->first();
        // $is_author = $author_id->id;
        
        // }
       
        
        if($user){
            $author_id = Author::where("user_id",$user->id)->first();
            $is_author = $author_id->id ?? 0;
            // return $is_author;
            if(Hash::check($request->password,$user->password)){

                if($is_admin){
                    return redirect("/admin");
                }
                if($is_author){
                $request->Session()->put(["loginid"=>$user,"is_author"=>$is_author]);
                }
                else{
                    $request->Session()->put("loginid",$user); 
                }
                return redirect()->route("home");

            }
            else{
                return back()->with("message","Email or Password is Invalid!");
            }
        }
        else{
            return back()->with("message","User not found");
        }
    }

    public function logout(){
        if(Session()->has("loginid")){
            Session()->flush();
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
        if(session()->has("loginid")){
        $user = Session()->get("loginid");
        $user_id = $user->id;
        }
        else{
            $user = Session()->get("signid");
            $user_id = $user->id;
        }
        $filename = time()."author.".$request->file("avatar")->getClientOriginalExtension();
        $author->avatar = $request->file("avatar")->storeAs("author_avatar",$filename);
        $author->description = $request->desc;

        // if not loginid session then use signid session

        $author->user_id = $user_id;
       
        $res = $author->save();

       

         if($res){
            
            return redirect("/login")->with("message","Author Details SuccessFul!! Login in");
        }
        else{
            return back()->with("message","something went wrong");
        }
        return view("auth.authorPage");

    }

   

    
}
