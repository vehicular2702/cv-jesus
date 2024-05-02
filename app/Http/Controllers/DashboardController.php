<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SobreMi;
use App\Models\RedSocial;
use App\Models\Blog;
use App\Models\Certificado;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class DashboardController extends Controller
{

    /**
     * DASHBOARD
     */

        public function index()
        {
            return view('dashboard');
        }

        public function config()
        {
            $sobres_mis = SobreMi::all();
            $blogs = Blog::all();
            $certificados = Certificado::all();
            return view('admin.index', compact('sobres_mis', 'blogs', 'certificados'));
        }

    /**
     * DASHBOARD
     */

    /**
     * CONFIGURATION SOBRE MI
     */

        public function store_sobre_mi(Request $request)
        {
            $data = $request->all();
            $red = SobreMi::create($data);

            if ($request->has('red_social')) {
                $nombreRedes = $request->input('red_social');

                foreach ($nombreRedes as $nombreRed) {
                    $valores = explode(',', $nombreRed);

                    foreach ($valores as $valor) {
                        $redSocial = RedSocial::create([
                            'red_social' => $valor,
                        ]);

                        $red->redes()->attach($redSocial->id_redes);
                    }
                }
            }

            return redirect()->back()->with('success', 'Registro creado con éxito');
        }

        public function edit_sobre_mi(string $id_sobre_mi)
        {
            $sobre_mi = SobreMi::findOrFail($id_sobre_mi);
            return view('admin.sobre_mi.edit', compact('sobre_mi'));
        }

        public function ver_certificado($id_certificado)
        {
            $certificado = Certificado::find($id_certificado);

            if ($certificado) {
                $archivoPath = storage_path('app/' . str_replace('storage/', 'public/', $certificado->archivo));

                if (file_exists($archivoPath)) {
                    return Response::file($archivoPath);
                } else {
                    return redirect()->back()->with('error', 'Archivo no encontrado');
                }
            }

            return redirect()->back()->with('error', 'Certificado no encontrado');
        }

     /**
     * CONFIGURATION SOBRE MI
     */

     /**
     * CONFIGURATION BLOG
     */
        public function store_blog(Request $request)
        {
            $data = $request->all();
            $blog = Blog::create($data);

            if ($request->hasFile('imagen_blog')) {
                $file = $request->file('imagen_blog');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('public/assets/blog/imagenes', $fileName);

                $blog->imagen_blog = 'assets/blog/imagenes/' . $fileName;
                $blog->save();
            }

            if ($request->hasFile('video_blog')) {
                $file = $request->file('video_blog');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('public/assets/blog/videos', $fileName);

                $blog->video_blog = 'assets/blog/videos/' . $fileName;
                $blog->save();
            }

            return redirect()->back()->with('success', 'Blog creado con éxito');
        }

     /**
     * CONFIGURATION BLOG
     */

     /**
     * CONFIGURATION CERTIFICADOS
     */

        public function store_certificado(Request $request)
        {
            $data = $request->all();

            if ($request->hasFile('archivo') && $request->file('archivo')->isValid()) {
                $file = $request->file('archivo');

                $uniqueName = uniqid() . '_' . $file->getClientOriginalName();

                $path = $file->storeAs('public/assets/pdf', $uniqueName);

                $data['archivo'] = str_replace('public/', 'storage/', $path);
            } else {
                return redirect()->back()->with('error', 'Archivo no válido o no cargado');
            }

            Certificado::create($data);

            return redirect()->back()->with('success', 'Certificado creado con éxito');
        }

        public function descargar_certificado($id_certificado)
        {
            $certificado = Certificado::find($id_certificado);

            if ($certificado) {
                $archivoPath = storage_path('app/' . str_replace('storage/', 'public/', $certificado->archivo));

                if (file_exists($archivoPath)) {
                    return Response::download($archivoPath);
                } else {
                    return redirect()->back()->with('error', 'Archivo no encontrado');
                }
            }

            return redirect()->back()->with('error', 'Certificado no encontrado');
        }

     /**
     * CONFIGURATION CERTIFICADOS
     */
}
