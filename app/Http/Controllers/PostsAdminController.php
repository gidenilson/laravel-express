<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostsAdminController extends Controller
{

    private $post;

    public function __construct(Post $post) {
        
        $this->post = $post;
    }

    public function index() {
        
        $posts = $this->post->paginate(5);
        return view('admin.posts.index', compact('posts'));
    }
    
    public function create() {
        return view('admin.posts.create');
        
    }
    
    public function store(PostRequest $request){

        $post = $this->post->create($request->all());
        
        $this->syncTags($post, $request->tags);
        
        return redirect()->route('admin.posts.index');
    }
    
    public function edit($id) {
        $post = $this->post->find($id);
        
        return view('admin.posts.edit', compact('post'));
        
    }
    public function update($id, PostRequest $request) {
        
        $post = $this->post->find($id);
        $post->update($request->all());
        
        $this->syncTags($post, $request->tags);
        
        return redirect()->route('admin.posts.index');        
    }
    
    public function destroy($id) {
        $this->post->find($id)->delete();
        return redirect()->route('admin.posts.index'); 
        
    }
    private function syncTags($post, $tags) {
        $tags = array_filter(array_map('trim', explode(',', $tags)));
        $tagsIDs = [] ;
        
        foreach ($tags as $tagName){
            $tagsIDs[] = Tag::firstOrCreate(['name'=>$tagName])->id;
        } 
        $post->tags()->sync($tagsIDs);
    }
}
