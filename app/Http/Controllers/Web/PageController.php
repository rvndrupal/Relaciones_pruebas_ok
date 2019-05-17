<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use App\Tag;

class PageController extends Controller
{
    public function blog(){

        $posts=Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);

        //dd($posts);

        return view('web.posts',compact('posts'));
    }

    public function post($slug)
    {
        $post=Post::where('slug',$slug)->first();

        //dd($post);

        return view('web.post', compact('post'));
    }

    public function category($slug) //filtrado por categoria
    {
        $category=Category::where('slug',$slug)->pluck('id')->first(); //busca la categoria

        $posts=Post::where('category_id',$category)
        ->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);

        return view('web.posts',compact('posts'));

    }


    public function tag($slug)//filtrado por tag
    {
        //consigue los post que tenga etiquetas tags con esta logica adicional
        $posts=Post::whereHas('tags', function($query) use($slug){
            $query->where('slug', $slug);
            //consigueme la etiqueta siempre y cuando contenga este slug
            //para una relacion muchos a muchos muy chingon
        })
        ->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);

        return view('web.posts',compact('posts'));

    }
}
