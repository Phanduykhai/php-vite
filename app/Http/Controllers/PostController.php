<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use App\Category;
use App\Models\Post;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function edit(){
        $post = Post::find(request()->id);
        if(Gate::allows("update-post", $post)){
            return view("post.edit", compact(["post"]));
        }
        abort(403);

//        if(Gate::forUser($user)->allows("update-post", $post)){
//            // nguoi dung nay duoc phep chinh sua
//        }
//        else{
//            // khong duoc phep chinh sua
//        }

//        if(Gate::forUser($user)->denies("update-post", $post)){
//            // nguoi dung nay khong duoc phep chinh sua
//        }
//        else{
//            // duoc phep chinh sua
//        }

//        dd($post); // giong var_dump
//        var_dump($post); // giong var_dump

//        $arr = ["name" => "ABC", "price" => 10000];
//        $arr = \Arr::add($arr, "sale_price", 100);
//        $arr = \Arr::except($arr, "price", 100);
//        dd($arr);

//        $title = "Lorem ipsum &";
//        $title = \Str::slug($title);
//        dd($title);

//        dd(public_path());

//        return response($post)->header("Content-Type", "text/csv");

//        dd(auth()->check());

//        session(["age" => 25]); // set session
//        $age = session()->get("age"); // lay gia tri cua tham so age trong mang session
//
//        session()->forget("age"); // huy gia tri cua tham so age trong mang session
//        $age = session()->get("age");
//        dd($age);
//
//        session()->flush(); // huy tat ca session
    }
}