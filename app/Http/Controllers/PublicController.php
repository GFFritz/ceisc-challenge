<?php

namespace App\Http\Controllers;

use App\Postagem;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $query = Postagem::where('ativa', 'S')->get();

        return view('public', ['data' => $query]);
    }

    public function postagem($id)
    {
        $query = Postagem::where('id', $id)->get();

        return view('public_post', ['data' => $query[0]]);
    }
}
