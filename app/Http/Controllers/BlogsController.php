<?php

namespace App\Http\Controllers;
use App\Models\blogs;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function home(){
        $blogs = blogs::where("is_featured","=",1)->limit(6)->get();

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
