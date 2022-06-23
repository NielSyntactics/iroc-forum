<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\PostDatabaseService;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {
        return view ('post.index');
    }

    public function create () {

        return view('post.create');
    }

    public function store (StorePostRequest $request, PostDatabaseService $postDatabaseService) {

        try {
            $postDatabaseService->storePostData($request);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 422);
        }

        return redirect()->route('post.index')->with('success', 'Post Added');
    }

    public function edit () {
        return view('post.edit');
    }

    public function update(StorePostRequest $request, PostDatabaseService $postDatabaseService) {

    }
}
