<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use App\Models\TeamMember;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index(){
        $team_members=TeamMember::orderBy('name','desc')->get();
        return view('welcome')->with([
            'members'=>$team_members,
        ]);
    }

    public function testing(){
        // // $publishers=DB::table('publishers')->get();
        // $publishers=DB::select('select * from publishers');
        // return $publishers;
        // $publishers= Publisher::where('id','<=',20)->where('name','Rose Haley')->get();
        $publishers= Publisher::where('id','<=',20)->where('name','Rose Haley')->get();


        return view('testing')->with([
            'publishers'=>$publishers,
        ]);
    }


}
