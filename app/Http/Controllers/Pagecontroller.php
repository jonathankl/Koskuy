<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pagecontroller extends Controller
{
    public function homepage(){

        $k = DB::table("kos")->get();

        return view("home",['kos'=>$k]);
    }

    public function detailkos($id){
        try{
            $d = DB::table("kos")->where("id","=",$id)->first();
            //select foto , d_kos, dan furnitur waktu selesai seeder
            return view("user.detailkos",['detail'=>$d]);
        }catch(Exception $x){
            echo $x;
        }
    }
}
