<?php

namespace App\Http\Controllers;
use App\Models\blogs;
use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Tag;

class BlogsController extends Controller
{
    public function home(Request $request){
        $tags = Tag::all();
        $blogs = blogs::with("author","user")->where("is_featured","=",1)->limit(6)->get();

        
        foreach($blogs as $blog){
            $he = $blog->tags;
        }
        $tag_array = explode(",",$he);
        

        $data = "";
        if(Session()->has("loginid")){
            $user = Session()->get("loginid");
            $data = $user->firstname;
            $request->Session()->put("data",$data);
        }
    

        return view("index",compact('blogs',"tags",'tag_array'));
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
        $tags = Tag::all();
        return view("publish",compact("tags"));
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
            // imploding the tag
            $blog->tags = implode(",",$request->tags);
            $blog->authorId = $author_id;
            $blog->userid = $user->id;
            return $blog;
            $res =  $blog->save();


            if($res){
                return redirect("/")->with("message",'Blog Published SuccessFully');
            }
            else{
                return back()->with("message","Something went wrong");
            }
    
}

    public function manageBlog(){
        if(Session()->has("is_author")){
           $author_id = Session()->get("is_author");
            $blogs = blogs::where("authorId",$author_id)->get();
        }
       
        return view("manageBlogs",compact("blogs"));
    }


    public function header(){
        $tags = Tag::all();
        return view("layouts.header",compact("tags"));
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

    // function to read average reading time
  



}
