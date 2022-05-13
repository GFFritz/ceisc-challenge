<?php

namespace App\Http\Controllers;

use App\Postagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function novo()
    {
        return view('novo');
    }

    public function store(Request $request){

        $query = Postagem::insert([
            'titulo' => $request->titulo,
            'descricao' => $request->titulo,
            'ativa' => 'S',
            'imagem' => $request->img
        ]);

        return redirect('home');
    }

    public function edit($id)
    {
        $post = Postagem::whereId($id)->withTrashed()->first();

        return view('editar', ['data' => $post]);
    }

    public function update(Request $request)
    {

        $result = Postagem::whereId($request->id)->withTrashed()->first();
        if ($result->imagem == $request->img){
            $imagem = $result->imagem;
        } else {
            $imagem = $request->img;
            if (file_exists(public_path('img/').$result->imagem))
            {
                unlink(public_path('img/').$result->imagem);
            }
        }

        $result = DB::table('postagem')
        ->whereId($request->id)
        ->update([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'imagem' => $imagem
        ]);

        return redirect('home');
    }

    public function destroy($id)
    {
        $result = Postagem::whereId($id)->first();
        $update = $result->ativa = 'N';
        $update = $result->save();
        $result->delete();

        return redirect('home');
    }

    public function activate($id)
    {
        $result = Postagem::whereId($id)->withTrashed()->first();
        $update = $result->ativa = 'S';
        $update = $result->save();
        $result->restore();

        return redirect('home');
    }
}
