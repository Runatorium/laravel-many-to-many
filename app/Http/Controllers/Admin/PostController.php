<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }


    public function create()
    {
        $types = Type::all();
        $technologies = Technology::all();
        return view('admin.posts.create', compact('types', 'technologies'));
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:15',
                'content' => 'nullable|max:300',
                'thumb' => 'nullable|max:300',
                'type_id' => 'nullable|exists:types,id',
                'technologies' => 'exists:technologies,id'
            ]
        );
        $form_data = $request->all();

        $newPost = Post::create($form_data);

        if ($request->has('technologies')) {
            $newPost->technologies()->attach($request->technologies);
        }

        return redirect()->route('admin.posts.index');
    }


    public function show($post)
    {
        $post = Post::findOrFail($post);
        return view('admin.posts.post', compact('post'));
    }


    public function edit(Post $post)
    {
        $technologies = Technology::all();
        $types = Type::all();
        return view('admin.posts.edit', compact('post', 'types', 'technologies'));
    }


    public function update(Request $request, $id)
    {

        $post = Post::findOrFail($id);

        $request->validate(
            [
                'title' => 'required|max:15',
                'content' => 'nullable|max:300',
                'thumb' => 'nullable|max:300',
                'type_id' => 'nullable|exists:types,id',
                'technologies' => 'exists:technologies,id'
            ]
        );
        $form_data = $request->all();
        $post->update($form_data);

        $post->technologies()->sync($request->technologies);
        return redirect()->route('admin.posts.index', compact('post'));
    }


    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('admin.posts.index');
    }
}