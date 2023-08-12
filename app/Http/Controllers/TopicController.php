<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    //
    public function index(){
        return view('topic.index');
    }

    public function create(){
        return view("topic.create");
    }

    public function store(Request $request){
        $validator = $request->validate(
            ['title' => 'required|unique:topics|max:100', ]
        );

        Topic::create($validator);
        return to_route("topic.index");
    }
}
