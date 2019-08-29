@extends('layouts.master')

@section('css')
<!--Jquery steps CSS -->
<link href="{{ URL::asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
<div class="col-sm-6">
   <h4 class="page-title">Form Wizard</h4>
   <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
       <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
        <li class="breadcrumb-item active">Form Wizard</li>
   </ol>
</div>
@endsection

@section('content')
  
<div class="row">
                                    <div class="col-lg-7">
                                            <div class="card">
                                                    <div class="card-body">
                                                            
                                                                    <form class="" action="#">
                                                                            <div class="form-group">
                                                                                <label>Nombre del Vídeo</label>
                                                                                <input type="text" class="form-control" required placeholder="Type something"/>
                                                                            </div>
                                                                            
                                                                            <div class="form-group">
                                                                                    <label>Descripción Corta</label>
                                                                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                                                                </div>


                                                                             <div class="form-group">
                                                                                        <label class="control-label">Categoria</label>
                                                                                        <select class="form-control select2">
                                                                                            <option>Seleccionar</option>
                                                                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                                                <option value="AK">Alaska</option>
                                                                                                <option value="HI">Hawaii</option>
                                                                                            </optgroup>
                                                                                            
                                                                                            
                                                                                        </select>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                            <label>Elegir Thumbnail</label>
                                                                                            <input type="file" class="filestyle" data-buttonname="btn-secondary">
                                                                                        </div>
                                                                            
                                                                            <div class="form-group mb-0">
                                                                                <div>
                                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                                                        Guardar Cambios
                                                                                    </button>
                                                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                                                        Cancelar
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </form>
        
                                                            </div>
    
                                                            <div class="card-body">
                                                                <form>
                                                                    <div class="form-group">
                                                                            <label>Código Iframe</label>
                                                                            <div>
                                                                                <textarea required class="form-control" rows="5"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </form>   
                                                            </div>
                                           </div> 
                                    </div> 
                               
                                    <div class="col-lg-5">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/FsysU3Mzz3U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                                    </div>
                                                </div>

                                      
                                            </div>
                                    </div>
                            </div> 
@endsection

@section('script')
<!-- Plugins js -->
<script src="{{ URL::asset('plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ URL::asset('plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script>
<!-- Plugins Init js -->
<script src="{{ URL::asset('assets/pages/form-advanced.js') }}"></script>
@endsection