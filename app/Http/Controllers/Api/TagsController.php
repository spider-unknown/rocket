<?php

namespace App\Http\Controllers\Api;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
    public function getTags(){
        $tags = Tag::all();
        return response()->json($tags);

    }

    public function getTagByName($name){
        $tag = Tag::where('name', 'like',  '%' .$name. '%')->get();
        return response()->json($tag);
    }

    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required',
        ]);

        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();

        return response()->json(['success' => true]);
    }
}
