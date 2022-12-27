<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Index page
    public function index()
    {
        return view('post.index');
    }

    // Create Blog page
    public function createBlog()
    {
        return view('post.ckeditor');
    }

    // Store blog
    public function storeBlog(Request $request, $type, $id)
    {
        PostController::storeDraftorPublish($request, $type, $id);
        return redirect('/');
    }

    // Store draft or publish
    public function storeDraftorPublish($request, $type, $id)
    {
        // For new blogs
        if ($id == 'new') {
            // Check if the blog name already exists
            if(Schema::connection('mongodb')->hasTable($request->blog_name)) {
                return redirect()->back() ->with('alert', "Collection $request->blog_name exists already!");
            }
            // Add 
            session()->put('collectionName', $request->blog_name);
            PostController::createTable($request->blog_name);

            $input = $request->all();
            $input['collection_id'] = $request->blog_name;
            $post = new Post;
            $post->create($input);

            session()->put('collectionName', 'live_blog_posts');

            $input = $request->all();
            $input['collection_id'] = $request->blog_name;
            Post::create($input);

            return redirect()->back() ->with('alert', "Blog added successfully!");
        }
    }

    // Create table
    public function createTable($blogName)
    {
        Schema::connection('mongodb')->create($blogName, function ($table) {
            $table->increments('id');
            $table->string('blog_name');
            $table->string('editor');
            $table->string('collection_id');
            $table->timestamps();
        });
    }

    // Show Table Data
    public function showTableData()
    {
        session()->put('collectionName', 'live_blog_posts');
        $tableStructure = Post::all();
        if (request()->ajax()) 
        {
            return datatables()->of($tableStructure)
                ->addColumn('action', 'post/components/tableActions')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
    }
}
