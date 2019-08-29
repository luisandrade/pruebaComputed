<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Playlist;
use App\DetallePlaylist;
use Illuminate\Support\Facades\DB;

class PlaylistController extends Controller
{
    public function index( Request $request){
        
        $playlist = Playlist::all();
        return ['playlist' => $playlist];
    }

    public function store(Request $request){
       
        try{
            DB::beginTransaction();

            $playlist = new Playlist();
            $playlist->id_usuario = $request->id_usuario;
            $playlist->nombre_playlist = $request->nombre_playlist;
            $playlist->hora_inicio = $request->hora_inicio;
            $playlist->fecha_emision = $request->fecha_emision;
            $playlist->loop = $request->loop;
            $playlist->auto_start = $request->auto_start;

            $playlist->save();

            $detalles_videos = $request->data;

            // foreach que recorre DetallePlylist
            foreach( $detalles_videos as $ep =>$det_video){

                $detalle_video = new DetallePlaylist;
                $detalle_video->id_playlist = $playlist->id; // el id del playlist insertado arriba en playlist
                $detalle_video->id_video = $det_video['id_video'];
                // $detalle_video->length_total = $det_video['length_total'];
                $detalle_video->save();

            }

            DB::commit();

        }catch(Exception $e){

            DB::rollback();
            
        }
    }
}
