<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController
{
    //create post
    public function create(){
        // dd('create');

        //go to table
        // Post::create([
        //     'name' => 'hlaing yu yin',
        //     'email' => 'hlaingyuyin28@gmail.com',
        //     'phone' => '45580220'
        // ]);

        //or

        // $data = [
        //     'name' => 'hlaing yu yin',
        //     // 'email' => 'hlaingyuyin28@gmail.com',
        //     'phone' => '45580220'
        // ];

        // Post::create($data);

        // dd('create success');


        //table
        // $data1 = DB::table('posts')->get();
        // dd($data1->toArray());


        //or
        //raw query
        // $data3 = DB::select('select * from posts');
        // dd($data3);


        // or
        //model (mostly use)
        $data2 = Post::get();
        dd($data2->toArray());

        //Post::where('age','<','15')->get();
        // Post::findOrFail($id)->delete();
        // Post::where('id',$id)->delete();
    }

}
