<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function contentForm(){
        return view('backend.pages.content.contentForm');
    }

    public function contentStore(Request $request){


       //dd($request->all());
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = date('Ymdhis').'.'.$request->image->extension();
            $request->image->storeAs('uploads', $imageName, 'public');
        }

        Content::create([

            "image"=>$imageName,
            "upload_date"=>$request->upload_date,
            "description"=>$request->description,

        ]);
        return back();

    }

    public function contentList(){

        $content = Content::all();
        return view('backend.pages.content.contentList',compact('content'));
    }
}
