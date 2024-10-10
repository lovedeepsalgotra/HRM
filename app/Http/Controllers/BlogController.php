<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function addblog(){

        $pagename="Blog";

        return view('blog.addblog', compact('pagename'));
        
    }

    public function insertblog(Request $request){
  
        $title = $request->title;
    
        $sub_heading = $request->sub_heading;
        $description = $request->description;
       $date = $request->date;
 
        $author = $request->author;
        $image = time() . '.' . $request
                    ->image
                    ->extension();
                $request
                    ->image
                    ->move(public_path('blogmedia') , $image);

        $data = array(
            "title" => $title,
            "image" => $image,
            "sub_heading" => $sub_heading,
            "description" => $description, 
            "date" => $date,
        
            
            "author" => $author,
            
        );

        Blog::insert($data);
    

    return redirect()->route('addblog');
       
        
    }

    public function bloglist(){
        $pagename="Blog";
  $bloglist=Blog::paginate(5);

  return view('blog.bloglist', compact('bloglist', 'pagename'));

    }




    public function deleteblog($id)
    {

    Blog::where('id', $id)->delete();

        return redirect()
            ->route('bloglist');
            
    }

    public function editblog(Request $request, $id){

        $pagename = "Blog";

        $getblogdata = Blog::where('id', $id)->first();

      

        return view('blog.editblog', compact('getblogdata', 'pagename'));
    }


    public function updateblog(request $request){

        $id = $request->id;

        $title = $request->title;
        $newimage = $request->newimage;
        $sub_heading = $request->sub_heading;
        $description = $request->description; 
        $date = $request->date;
 
        $author = $request->author;

   

        if ($newimage!= Null)

       
        {
           
            $newimage = time() . '.' . $request
                ->newimage
                ->extension();

            $request
                ->newimage
                ->move(public_path('blogmedia') , $newimage);

            $data = array(
                "id" => $id,
                "title" => $title,
            "image" => $newimage,
            "sub_heading" => $sub_heading,
            "description" => $description, 
            "date" => $date,
        
            
            "author" => $author,

            );
        }
        else
        {
          
            $data = array(
            "id" => $id,
            "title" => $title,
           "sub_heading" => $sub_heading,
            "description" => $description,
            "author" => $author,
            "date" => $date,

            );

        }

     Blog::where('id', $id)->update($data);
      
     

        return redirect()->route('bloglist');
           

    }
}
