@extends('layouts.master')


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
                                    <div class="col-lg-2">
                                            <div class="card categori">

                                                    <h6 class="mt-0">Categorias</h6>
                                                    <p>Deportes <span class="badge badge-primary badge-pill float-right">2</span></p>
                                                    <p>Animación <span class="badge badge-primary badge-pill float-right">2</span></p>
                                                    <p>Música <span class="badge badge-primary badge-pill float-right">2</span></p>
                                                    <p> Miscelaneo <span class="badge badge-primary badge-pill float-right">2</span></p>
                                                   
                                           </div> 
   
                                           <div class="card categori">
   
                                                   <h6 class="mt-0">Filtros</h6>
                                                   <p>Categoria <span class="badge badge-primary badge-pill float-right">2</span></p>
                                                   <p>Tiempo <span class="badge badge-primary badge-pill float-right">2</span></p>
                                                   <p>Calidad <span class="badge badge-primary badge-pill float-right">2</span></p>
                                                   <p>Fecha <span class="badge badge-primary badge-pill float-right">2</span></p>
                                                  
                                          </div> 
                                    </div> 
                               
                                    <div class="col-lg-10">
                                            <div class="card">
                                           <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="card videos">
                                                        <div class="tiempo">13:00:00</div>
                                                            <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
                                                            <div class="datos-video">
                                                                <h6 class="card-title mb-1 mt-0"> Los pequeños muppets</h6>
                                                                
                                                             <small class="categoria ">Categoria</small> </br>
                                                             <span class="edit"><a href="videos-interior"><i class="ion ion-md-create"></i></a></span>
                                                             <span class="edit"><i class="ion ion-md-trash "></i></span>
                                                            </div>
                                                    </div>
                                                </div>

                                            </div></div>
                                        </div>
                                    </div>
                            </div>   
@endsection

