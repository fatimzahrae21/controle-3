<?php

namespace App\Http\Controllers;
use App\models\video;
use App\Events\vedioViewers;

use Illuminate\Http\Request;

class eventController extends Controller
{

    public function getVideo(){
       $video= video::first();
       
       event(new vedioViewers($video));
        return view ('youtube')->with('video',$video);
    }

}
