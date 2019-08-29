<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function index( Request $request){
        
        $videos = Video::all();
        return ['videos' => $videos];
    }

    public function listarVideo( Request $request){
        
        $videos = Video::all();
        return ['videos' => $videos];
    }

    public function store(Request $request){
       
        try{
            DB::beginTransaction();

            $video = new Video();
            $video->id_canal = $request->id_canal;
            $video->nombre_video = $request->nombre_video;
            $video->length = $request->length;

            $video->save();

            DB::commit();

        }catch(Exception $e){

            DB::rollback();
            
        }
    }
}
