<?php

namespace App\Http\Controllers;
use App\Models\blogs;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function home(Request $request){
        $blogs = blogs::where("is_featured","=",1)->limit(6)->get();
        $data = "";
        if(Session()->has("loginid")){
            $user = Session()->get("loginid");
            $data = $user->firstname;
            $request->Session()->put("data",$data);
        }
    

        return view("index",compact('blogs'));
        // return response()->json(['data'=>$data]);
    }

    public function SingleBlogs($id){
        return view("blog-single");
    }

    public function Blogs(){
        return view("blog");
    }

    public function about(){
        return view("about");
    }

    public function authorInfo(){
        return view("author-single");
    }
}
