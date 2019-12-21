<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'postName' => 'required|string|max:191',
            'postDescription' => 'required',

        ]);


        if ($request->postImage) {

            $name = time() . '.' . explode('/', explode(':', substr($request->postImage, 0, strpos($request->postImage, ';')))[1])[1];

            \Image::make($request->postImage)->save(public_path('img/post/') . $name);
            $request->merge(['postImage' => $name]);
        }


        return Post::create([
            'postName' => $request['postName'],
            'postDescription' => $request['postDescription'],
            'postImage' => $request['postImage'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'postName' => 'required|string|max:191',
            'postDescription' => 'required',

        ]);

        $post = Post::findOrFail($id);

        $currentpostImage = $post->postImage;


        if ($request->postImage != $currentpostImage) {

            $name = time() . '.' . explode('/', explode(':', substr($request->postImage, 0, strpos($request->postImage, ';')))[1])[1];

            \Image::make($request->postImage)->save(public_path('img/post/') . $name);
            $request->merge(['postImage' => $name]);
        }

        $post->update($request->all());

        return ['message' => "Succes"];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // delete the user
        $post->delete();

        return ['mesaage' => 'Post Delete'];
    }
}
