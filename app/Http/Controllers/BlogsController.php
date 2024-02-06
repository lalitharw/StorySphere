<?php

namespace App\Http\Controllers;
use App\Models\blogs;
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

    public function publishPage(){
        return view("publish");
    }

    public function storePublishBlog(Request $request){

        
        $author_id = Session()->get("is_author");

            $blog = new blogs();
            $blog->title = $request->title;
            $blog->description = $request->desc;
            $blog->tags = "HAJ";
            $blog->authorId = $author_id;
           $res =  $blog->save();


            if($res){
                return redirect("/")->with("message",'Blog Published SuccessFully');
            }
            else{
                return back()->with("message","Somrthing went wrong");
            }
    
}

}
