<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogDetail($blog_id,$author_id){
        return 'This is blog id '.$blog_id.' of author '.$author_id;
    }
}
