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
        // $data2 = Post::get();
        // dd($data2->toArray());

        //Post::where('age','<','15')->get();
        // Post::findOrFail($id)->delete();
        // Post::where('id',$id)->delete();

        $data = Post::get();
        // dd ($data);  //collection
        dd ($data->toArray());  // array


    }

    public function list(){
        // $data = Post::get();   //collection  ---->
        // $data = Post::get()->toArray();    //array    []
        // return view('list',compact('data'));


        // $data = Post::first();
        // $data = Post::where('id','=',1)
        //             ->where('email','wkuvalis@example.net')   //where mean AND
        //             ->get();

        // dd($data[0]['name']);


        // $data = Post::orWhere('id','<=',10)
        //             ->orWhere('email','angelo52@example.net')   //orWhere mean OR
        //             ->get();


        // $data = Post::orWhere('id','<=',10)
        //             ->orderBy('id','desc')   //asc 1,2,3    // desc 3,2,1
        //             ->get();


        $data = Post::select('name as userName','email')
                    ->where('name','like','%Wil%')   //search with LIKE %---%
                    ->get();

        // $data = Post::where('id',3)->get();  //or
        // $data = Post::find(3);



        //testing table join
        // $data = Post::select('posts.*') //ဘယ် table ကယူမှာလဲရေးပေးရမယ်
        //             ->where('posts.name','mgmg')  //leftJoin ဆို post table priority ,rightJoin ဆို categories priority data အကုန်ပါမယ်  မပါတာဆို null
        //             ->join('categories','posts.id','categories.post_id')  //table name, ဘယ်tableရဲ့ id နဲ့ ဘာနဲ့ join
        //             ->get();


        dd($data->toArray());

    }

}
