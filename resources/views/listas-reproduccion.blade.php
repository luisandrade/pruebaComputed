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
                                    
                               
                                    <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                        <div class="table-responsive">
                                                                <table class="table table-striped mb-0">
                    
                                                                    <thead>
                                                                        <tr>

                                                                            <th>Nombre Lista</th>
                                                                            <th>Tiempo</th>
                                                                            <th>Fecha Emision</th>
                                                                            <th>Canal</th>
                                                                            <th><center>Editar</center></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                           
                                                                            <th>Sabado 2 de Julio</th> 
                                                                            <th>13:20:00</th> 
                                                                            <th>02-07-2019</th> 
                                                                            <th>Cachipum tv</th> 
                                                                            <th><center><a href="edit-programacion"><i class="ion ion-md-create edit"></i></a> <i class="ion ion-md-trash edit"></i></center></th> 
                                                                        </tr>

                                                                        <tr>
                                                                           
                                                                            <th>Sabado 2 de Julio</th> 
                                                                            <th>13:20:00</th> 
                                                                            <th>02-07-2019</th> 
                                                                            <th>Cachipum tv</th> 
                                                                            <th><center><a href="edit-programacion"><i class="ion ion-md-create edit"></i></a> <i class="ion ion-md-trash edit"></i></center></th>                                                                        </tr>

                                                                        <tr>
                                                                           
                                                                            <th>Sabado 2 de Julio</th> 
                                                                            <th>13:20:00</th> 
                                                                            <th>02-07-2019</th> 
                                                                            <th>Cachipum tv</th> 
                                                                            <th><center><a href="edit-programacion"><i class="ion ion-md-create edit"></i></a> <i class="ion ion-md-trash edit"></i></center></th>                                                                        </tr>
                                                                        
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                </div>

                                      
                                            </div>
                                    </div>
                            </div>
@endsection

