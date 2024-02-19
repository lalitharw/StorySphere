<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Models\Author;
use Illuminate\Http\Request;

class apiController extends Controller
{
    public function blogs(){
        $blogs = blogs::all();
        return response()->json(["blogs"=>$blogs]);
    }

    public function specificBlogs($id){
        $blog = blogs::where("id",$id)->get();
        return response()->json(["blog"=>$blog]);
    }

    public function author($id){
        $author = Author::where("id",$id)->get();
        return response()->json(['author'=>$author]);
    }
}
