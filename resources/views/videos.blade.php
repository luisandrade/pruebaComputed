@extends('layouts.master')


@section('breadcrumb')
<div class="col-sm-6">
   <h4 class="page-title">Biblioteca de vídeos</h4>
   <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard </a></li>
        <li class="breadcrumb-item active">Biblioteca de Vídeos</li>
   </ol>
</div>
@endsection

@section('content')
  
<div class="row">

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">


                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th><center>Thumbnail</center></th>
                                                <th>Nombre de Vídeo</th>
                                                <th>Duración</th>
                                                <th>Categoria</th>
                                                <th>Tamaño</th>
                                                <th>Peso</th>
                                                <th><center>Editar</center></th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            <tr>
                                                <td><center><img class="img-fluid" src="assets/images/gallery/work-1.jpg" alt="Card image cap" style="max-width:60px;"></center></td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>    <center> 
                                                     <button type="submit" class="btn btn-success waves-effect waves-light mx-auto" ><i class="ti-pencil"></i></button>
                                                     <button type="submit" class="btn btn-danger waves-effect waves-light mx-auto" ><i class="ti-trash"></i></button>
</center>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><center><img class="img-fluid" src="assets/images/gallery/work-1.jpg" alt="Card image cap" style="max-width:60px;"></center></td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>    <center> 
                                                     <button type="submit" class="btn btn-success waves-effect waves-light mx-auto" ><i class="ti-pencil"></i></button>
                                                     <button type="submit" class="btn btn-danger waves-effect waves-light mx-auto" ><i class="ti-trash"></i></button>
</center>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><center><img class="img-fluid" src="assets/images/gallery/work-1.jpg" alt="Card image cap" style="max-width:60px;"></center></td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>    <center> 
                                                     <button type="submit" class="btn btn-success waves-effect waves-light mx-auto" ><i class="ti-pencil"></i></button>
                                                     <button type="submit" class="btn btn-danger waves-effect waves-light mx-auto" ><i class="ti-trash"></i></button>
</center>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><center><img class="img-fluid" src="assets/images/gallery/work-1.jpg" alt="Card image cap" style="max-width:60px;"></center></td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>    <center> 
                                                     <button type="submit" class="btn btn-success waves-effect waves-light mx-auto" ><i class="ti-pencil"></i></button>
                                                     <button type="submit" class="btn btn-danger waves-effect waves-light mx-auto" ><i class="ti-trash"></i></button>
</center>
                                                </td>
                                            </tr>
                                            
                                            
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                      
@endsection

