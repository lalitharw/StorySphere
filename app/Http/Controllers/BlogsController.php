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
        $data = "";
        if(Session()->has("loginid")){
            $user = Session()->get("loginid");
            $data = $user->firstname;
            $request->Session()->put("data",$data);
        }
    

        return view("index",compact('blogs',"tags"));
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

            $request->validate([
                "title" => "required",
                "tag" => "required",
                "description"  => "required"
            ]);

            $blog = new blogs();
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->authorId = $author_id;
            $blog->userid = $user->id;
            $blog->tag = $request->tag;
            $res =  $blog->save();
            if($res){
                return redirect("/manageblog")->with("message",'Blog Published SuccessFully');
            }
            else{
                return back()->with("message","Something went wrong");
            }
    
}

    public function manageBlog(){
        if(Session()->has("is_author")){
           $author_id = Session()->get("is_author");
            $blogs = blogs::where("authorId",$author_id)->get();
            return response()->json(['data',$blogs]);
            // return view("manageBlogs",compact("blogs"));
        }
    }

    public function manage(){
        return view("manageBlogs");
    }

    public function editBlog($id){
        $tags = Tag::all();
        $route = $id;
        $blog = Blogs::where("id",$id)->first();
        return view("edit",compact("tags","blog","route"));
    }

    public function updateBlog($id,Request $request){
        $blog = blogs::find($id);
        $blog->description = $request->description;
        $blog->title = $request->title;
        $blog->tag = $request->tag;
        $blog->save();
        return redirect("/manageblog")->with("message","Blog updated Successfully");
        
    }

    public function deleteBlog($id){
        blogs::find($id)->delete();
        return response()->json(["result"=>"Blog Deleted Successfully"]);
    }

    public function allTags(){
        $tags = Tag::all();
        $count = array();
        foreach($tags as $tag){
            $counter = blogs::where("tag",$tag->id)->count();
            array_push($count, $counter);
        }
        
        // return $count;
        return view("tags",compact("tags","count"));
    }

    public function CategoryTag($id){
        $blogs = blogs::where("tag",$id)->get();
        $tag_name = Tag::where("id",$id)->first();
        $res= null;
        if($blogs){

            $res = $blogs;
        }
        else{
            $res = "Not Blogs Found";
        }
        return view("tag-single",compact("res","tag_name"));
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
}