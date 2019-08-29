@extends('layouts.master')

@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{ URL::asset('plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Editar Lista</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
        <li class="breadcrumb-item active">Form Editors</li>
    </ol>
</div>
@endsection

@section('content')
<div class="row">
                                    <div class="col-lg-5">
                                            <div class="card">
                                                    <div class="card-body">

                                                                <div class="btn-group m-b-15" role="group" aria-label="Basic example">
                                                                    <button type="button" class="btn btn-success"><i class="ti-plus"></i> Agregar Live</button>
                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</button>
                                                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                                    </div>
                                                                </div>

                                                            <div class="">
                                                                    <table class="table table-sm m-0 table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Tiempo</th>
                                                                                <th>Nombre Video</th>
                                                                                <th></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">00:20:00</th>
                                                                                <td>Caballeros-del-zodiaco-ep1-t2</td>
                                                                                <td><i class="ion ion-md-add-circle "></i></td>
                                                                               
                                                                            </tr>
                                                                            <tr>
                                                                                    <th scope="row">00:20:00</th>
                                                                                    <td>Caballeros-del-zodiaco-ep1-t2</td>
                                                                                    <td><i class="ion ion-md-add-circle "></i></td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <th scope="row">00:20:00</th>
                                                                                        <td>Caballeros-del-zodiaco-ep1-t2</td>
                                                                                        <td><i class="ion ion-md-add-circle"></i></td>
                                                                                    </tr> 
                                                                            <tr>
                                                                                            <th scope="row">00:20:00</th>
                                                                                            <td>Caballeros-del-zodiaco-ep1-t2</td>
                                                                                            <td><i class="ion ion-md-add-circle"></i></td>
                                                                                        </tr>
                                                                            
                                                                        </tbody>
                                                                    </table>
                        
                                                                </div>
                                                               
        
                                                    </div>
    
                                                            
                                           </div> 
                                    </div> 
                               
                                    <div class="col-lg-7">

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="table-striped">
                                                                    <table class="table table-sm m-10 table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Hora Inicio</th>
                                                                                <th>Hora Finaliza</th>
                                                                                <th>Nombre de Vídeo</th>
                                                                                <th>Duración</th>
                                                                                <th>Borrar</th>
                                                                                
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="table-striped">
                                                                            <tr>
                                                                                <th scope="row">00:00:00 am</th>
                                                                                <td>00:40:00 am</td>
                                                                                <td>Caballeros-del-zodiaco-ep1-t2</td>
                                                                                <td>00:20:00</td>
                                                                                <td><center><i class="ion ion-md-close-circle "></i></center></td>
                                                                            </tr>
                                                                            <tr>
                                                                                    <th scope="row">00:20:00 am</th>
                                                                                    <td>00:40:00 am</td>
                                                                                    <td>Caballeros-del-zodiaco-ep1-t2</td>
                                                                                    <td>00:20:00</td>
                                                                                    <td><center><i class="ion ion-md-close-circle "></i></center></td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <th scope="row">00:40:00 am</th>
                                                                                        <td>01:20:00 am</td>
                                                                                        <td>LIVE EVENT</td>
                                                                                        <td>01:00:00</td>
                                                                                        <td><center><i class="ion ion-md-close-circle "></i></center></td>
                                                                                    </tr>
                                     
                            
                                                                                <tr>
                                                                                        <th scope="row">01:20:00 am</th>
                                                                                        <td>01:40:00 am</td>
                                                                                        <td>Caballeros-del-zodiaco-ep1-t2</td>
                                                                                        <td>00:20:00</td>
                                                                                        <td><center><i class="ion ion-md-close-circle"></i></center></td>
                                                                                    </tr>


                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr>
                                                                              <td></td>
                                                                              <td></td>
                                                                              <td></td>
                                                                              <td><i class="ion ion-md-clock "></i> 00:00:00</td>
                                                                              <td></td>
                                                                            </tr>
                                                                          </tfoot>
                                                                    </table>
                                                                </div>
                        
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                                            Guardar Lista
                                                                        </button>   
                                                                        <button type="submit" class="btn btn-dark waves-effect waves-light mr-1">
                                                                                <i class="ti-control-play"></i> Preview
                                                                            </button>      
                                                
                                                </div>

                                          
                                    </div>
                                    <div class="card">
                                    <div class="card-body">


                                                                    <div class="form-group">
                                                                            <label>Código Iframe</label>
                                                                            <div>
                                                                                <textarea required class="form-control" rows="5"><iframe></iframe></textarea>
                                                                            </div>
                                                                        </div>
 
                                    </div>
                                    </div>
                            </div>

                 
@endsection

@section('script')
<!--tinymce js-->
<script src="{{ URL::asset('plugins/tinymce/tinymce.min.js') }}"></script>
<!--Summernote js-->
<script src="{{ URL::asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/form-editors.int.js') }}"></script>
@endsection