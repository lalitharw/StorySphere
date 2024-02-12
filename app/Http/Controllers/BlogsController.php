<?php

namespace App\Http\Controllers;
use App\Models\blogs;
use Illuminate\Http\Request;
use App\Models\Author;

class BlogsController extends Controller
{
    public function home(Request $request){
        $blogs = blogs::with("author","user")->where("is_featured","=",1)->limit(6)->get();

        
        // return response($sblogs);
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
        $blogs = blogs::with("user")->where("id",$id)->first();

        $footerBlogs = blogs::with("user")->take(2)->get();
        return view("blog-single",compact("blogs","footerBlogs"));
    }

    public function Blogs(){
        $blogs = blogs::paginate(8);
        return view("blog",compact("blogs"));
    }

    public function about(){
        return view("about");
    }

    public function authorInfo($id){
        $author_info = author::with("user")->where("id",$id)->first();
        $blogs = blogs::where("authorid",$author_info->id)->get();
        // return response($author_info);
        return view("author-single",compact("blogs","author_info"));
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
        $user = Session()->get("loginid");
        // return $user;

            $blog = new blogs();
            $blog->title = $request->title;
            $blog->description = $request->desc;
            $blog->tags = "HAJ";
            $blog->authorId = $author_id;
            $blog->userid = $user->id;
           $res =  $blog->save();


            if($res){
                return redirect("/")->with("message",'Blog Published SuccessFully');
            }
            else{
                return back()->with("message","Somrthing went wrong");
            }
    
}

    public function manageBlog(){
        if(Session()->has("is_author")){
           $author_id = Session()->get("is_author");
            $blogs = blogs::where("authorId",$author_id)->get();
        }
       
        return view("manageBlogs",compact("blogs"));
    }

    public function upload(){
        return view("upload");
    }

    public function uploadFunction(Request $request){
        echo "<pre>";
        $filename = "lalit.". $request->file("image")->getClientOriginalExtension();
        $name = $request->file("image")->storeAs("public/upload",$filename);
        return "Photo uploaded at ".$name;
    }

}
