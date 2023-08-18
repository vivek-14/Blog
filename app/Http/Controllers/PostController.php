<?php

namespace App\Http\Controllers;

use App\Http\Requests\blog\PostCreateRequest;
use App\Http\Requests\blog\PostUpdateRequest;
use App\Http\Services\PostControllerServices;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    protected PostControllerServices $postServices;

    public function __construct(PostControllerServices $postServices)
    {
        $this->postServices = $postServices;
    }

    public function index()
    {
        $posts = Post::latest()->searchfilter(request(['search', 'category', 'user']))->paginate(6)->withQueryString();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        $this->authorize('create', Post::class);
        $data = [
            'category' => Category::all(),
            'user' => auth()->user()
        ];
        return view('posts.create', compact('data'));
    }

    public function store(PostCreateRequest $request)
    {
        // Get validated data
        $validatedData = $request->validated();

        // Process some more data
        $processedData = (new PostControllerServices)->storeService($validatedData);

        // Create post
        Post::create($processedData);

        // return back
        return redirect()->back()->with('success', 'Post created successfully');
    }

    public function listPostsByUserId(User $user)
    {
        return view('dashboard.index', compact('user'));
    }

    public function edit(Post $post)
    {
        $this->authorize('update', Post::class);

        $data = [
            'post' => $post,
            'category' => Category::all(),
        ];

        return view('posts.update', compact('data'));
    }

    public function update(PostUpdateRequest $request, Post $post)
    {

        // Get validated data
        $validatedData = $request->validated();

        // Process some more data
        $processedData = $this->postServices->updateService($validatedData);

        // Update posts
        $post->updateOrFail($processedData);

        // return back
        return redirect()->back()->with('success', 'Post updated!');
    }

    public function destroy(Post $post)
    {
        $this->authorize('destroy', Post::class);

        $post->delete();

        // return back
        return redirect()->back()->with('success', 'Post deleted!');
    }
}