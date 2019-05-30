<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 32.3: For File Storage Operations:
use Illuminate\Support\Facades\Storage; 
// 10: For Using the Post db
use App\Post;
// 10: For Using the User db
use App\User;
// 10: For Using sql queries
use DB;
use App\Http\Resources\PostsResource;

class PostsController extends Controller
{
    /**
     * 28.1.1: Create controller instance for Auth & inc Eception, using middleware.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'fetchall']]);
    }
    
    /**
     * 10.1: Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 10.1.1: Using sql query to fetch all Posts:
            //$posts = DB::select('SELECT * FROM posts');
        // 13.1.1: Fetch all data using eleqouent:
            //$posts = Post::all();
        // 13.1.2: Order by Desc:
            //$posts = Post::orderBy('created_at', 'desc')->get();
        // 13.1.3: For Pulling limited records:
            //$posts = Post::orderBy('created_at', 'desc')->take(2)->get();
        // 13.1.4: For Pagination:
            $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        // 10.1.2: return posts.index, @ 13.2: inject $posts:
            return view('posts.index')->with('posts', $posts);
    }

    /**
     * 10.1: Display a listing of the resource.
     *
     * @return PostsResource
     */
    public function fetchall()
    {
        // 10.1.1: Using sql query to fetch all Posts:
            //$posts = DB::select('SELECT * FROM posts');
        // 13.1.1: Fetch all data using eleqouent:
            //$posts = Post::all();
        // 13.1.2: Order by Desc:
            //$posts = Post::orderBy('created_at', 'desc')->get();
        // 13.1.3: For Pulling limited records:
            //$posts = Post::orderBy('created_at', 'desc')->take(2)->get();
        // 13.1.4: For Pagination:
            $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        // 10.1.2: return posts.index, @ 13.2: inject $posts:
            return PostsResource::collection($posts);
    }

    /**
     * 10.2: Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!(auth()->user()->id)){
            return redirect('/posts')->with('error', 'You Need to Log in to Creat Post!');
        } else {
            // 10.2.1: Connect to posts/create page
            return view('posts.create');
        }
    }

    /**
     * 10.3: Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 10.3.1: Validation of input data form client: 31.1: & extends image verificaion:
            $this->validate($request, [
                'title' => 'required',
                'body' => 'required',
                'cover_image' => 'image|nullable|max:1999'
            ]);

        // 31.2: Handle File Upload:
            if($request->hasFile('cover_image')){
                // 31.2.1: Get the File Name with extension: 
                $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
                // 31.2.3: Get just File Name:
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                // 31.2.4: Get just File Extension:
                $fileExt = $request->file('cover_image')->getClientOriginalExtension();
                // 31.2.5: Creating file Name to Store
                $fileNameToStore = $fileName.'_'.time().'_'.$fileExt;
                // 31.2.6: Now Upload the Image:
                $path = $request->file('cover_image')->storeAs('public/cover_image', $fileNameToStore);
            } else{
                // 31.2.7: If no file is uploaded:
                $fileNameToStore = 'noimage.jpg';
            }
        
        // 10.3.2: Insert the validated data into db:
            $post = new Post;
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            // 10.3.2.1: Check if the user is loged in:
            if (!(auth()->user()->id)){
                return redirect('/posts')->with('error', 'You Need to Log in to Creat Post!');
            } else {
                // 23.1: Update the user id to posts:
                    $post->user_id = auth()->user()->id;
                    $post->cover_image = $fileNameToStore;
                    $post->save();

                // 10.3.3: Now Redirect with success msg
                    return redirect('/posts')->with('success', 'Post Created Successfully!');
            }
    }

    /**
     * 10.4: Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 10.4.1: Find the post with id sent & return the entire post using eleqouent
            $post = Post::find($id);
            return view('posts.show')->with('post', $post);
        // 10.4.2: To use where clause
            // return Post::where('title', 'Post Two')->get();
    }

    /**
     * 10.4: Display the specified resource.
     *
     * @param  int  $id
     * @return PostsResource
     */
    public function fetchone($id)
    {
        // 10.4.1: Find the post with id sent & return the entire post using eleqouent
            $post = Post::findOrFail($id);
            return new PostsResource($post);
        // 10.4.2: To use where clause
            // return Post::where('title', 'Post Two')->get();
    }

    /**
     * 10.5: Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 10.5.1: Check if the user is loged in:
        if (!(auth()->user()->id)){
            return redirect('/posts')->with('error', 'You Need to Log in to Creat Post!');
        } else {
            // 10.5.2: Find the post with $id to be edited:
            $post = Post::find($id);
            // 28.1: Check for Correct User to Edit:
            if((auth()->user()->id) != ($post->user_id)){
                return redirect('/posts')->with('error', 'Your Not Authourized to Edit that Post.');
            } else {
                // 10.5.1: Find the post with id sent & return the entire post using eleqouent
                return view('posts.edit')->with('post', $post);
            }
        }
    }

    /**
     * 10.6: Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            // 10.6.1: : Validation of input data form client:
                $this->validate($request, [
                    'title' => 'required',
                    'body' => 'required',
                    'cover_image' => 'image|nullable|max:1999'
                ]);

            // 31.3: Handle File Upload Edit:
                if($request->hasFile('cover_image')){
                    // 31.3.1: Get the File Name with extension: 
                    $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
                    // 31.3.3: Get just File Name:
                    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    // 31.3.4: Get just File Extension:
                    $fileExt = $request->file('cover_image')->getClientOriginalExtension();
                    // 31.3.5: Creating file Name to Store
                    $fileNameToStore = $fileName.'_'.time().'_'.$fileExt;
                    // 31.3.6: Now Upload the Image:
                    $path = $request->file('cover_image')->storeAs('public/cover_image', $fileNameToStore);
                } 
            
            // 10.3.2: Update the validated data into db
                $post = Post::find($id);
                $post->title = $request->input('title');
                $post->body = $request->input('body');
                 // 28.2: Check for Correct User to Update: 31.3: & extends image verificaion:
                if((auth()->user()->id) != ($post->user_id)){
                    return redirect('/posts')->with('error', 'You are not Authorized in to Update that Post.');
                } else {
                    // 31.3.7: Update only if Image is changed:
                    if($request->hasFile('cover_image')){
                        // 31.4.1: Check if its not the default image
                        if($post->cover_image != 'noimage.jpg'){
                            // 31.4.2: Delete the Image in the storage
                            Storage::delete('public/cover_image/'.$post->cover_image);
                        }
                        $post->cover_image = $fileNameToStore;
                    }
                    $post->user_id = auth()->user()->id;
                    $post->save();
                    // 10.3.3: Now Redirect with success msg
                    return redirect('/posts')->with('success', 'Post Updated Successfully!');
                }
    }

    /**
     * 10.7: Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 10.7.1: Find the post to be deleted with the id:
            $post = Post::find($id);
        // 28.3: Check for Correct User to Delete:
            if((auth()->user()->id) != ($post->user_id)){
                return redirect('/posts')->with('error', 'Your Not Authourized to Delete that Post.');
            } else {
                // 31.4.1: Check if its not the default image
                if($post->cover_image != 'noimage.jpg'){
                    // 31.4.2: Delete the Image in the storage
                    Storage::delete('public/cover_image/'.$post->cover_image);
                }
                // 10.7.2: Delete the post:
                    $post->delete();
                // 10.7.3: Redirect to Posts Page
                    return redirect('/posts')->with('success', 'Post Deleted Successfully');
            }
    }
}
