<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class ImageController extends Controller
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

    public function upload(Request $request)
    {

        $rules = array(
            'file' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $image = $request->file('file');

        $newName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img'), $newName);

        $output = array(
            'success' => 'Upload da imagem completo',
            'name' => $newName,
            'image' => '<img src="/img/'.$newName.'" class="img-thumbnail" />'
        );

        return response()->json($output);
    }

    public function destroy($data) {
        return response()->json($data);
    }
}
