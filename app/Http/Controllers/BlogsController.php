<?php

namespace App\Http\Controllers;
use App\Models\blogs;
use Illuminate\Http\Request;
use App\Models\Author;

class BlogsController extends Controller
{
    public function home(Request $request){
        $blogs = blogs::where("is_featured","=",1)->limit(6)->get();
        // return response($blogs);
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
        $blogs = blogs::where("id",$id)->first();

        $footerBlogs = blogs::take(2)->get();
        return view("blog-single",compact("blogs","footerBlogs"));
    }

    public function Blogs(){
        return view("blog");
    }

    public function about(){
        return view("about");
    }

    public function authorInfo($id){
        $author = Author::where("author_id","=",$id)->first();
        $blogs = blogs::where("authorId",$author->author_id)->get();
        // return response($blogs);

        return view("author-single",compact("author","blogs"));
    }

    public function publishPage(){
        return view("publish");
    }

    public function TagSingle(){
        return view("tag-single");
    }

    public function Tag(){
        return view("tags");
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
