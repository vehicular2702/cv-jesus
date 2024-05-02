<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Certificado;
use App\Models\SobreMi;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $sobres_mis = SobreMi::all();
        return view('client.index', compact('sobres_mis'));
    }

    public function cv()
    {
        $certificados = Certificado::paginate(10);
        return view('client.cv', compact('certificados'));
    }

        public function blog()
        {
            $blogs = Blog::all();
            $totalBlogs = Blog::count();
            return view('client.blog', compact('blogs', 'totalBlogs'));
        }

        public function show($id_blog)
        {
            $blog = Blog::find($id_blog);
            return view('videos.cursos', compact('blog'));
        }
}
