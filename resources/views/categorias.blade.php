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
                                    <div class="col-lg-4">
                                            <div class="card">
                                                    <div class="card-body">
                                                            <form class="" action="#">
                                                                    <div class="form-group">
                                                                        <label>Agregar Categoria</label>
                                                                        <input type="text" class="form-control" required placeholder="Type something"/>
                                                                    </div>
                                                            
                                                                    <div class="form-group mb-0">
                                                                            <div>
                                                                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                                                    Crear
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                </form>
                                                                    
        
                                                    </div>
    
                                                            
                                           </div> 
                                    </div> 
                               
                                    <div class="col-lg-8">
                                            <div class="card">
                                                <div class="card-body">
                                                        <div class="table-responsive">
                                                                <table class="table mb-0">
                    
                                                                    <thead>
                                                                        <tr>

                                                                            <th>First Name</th>
                                                                            <th>Last Name</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">1</th>
                                                                            <td>Mark</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">2</th>
                                                                            <td>Jacob</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">3</th>
                                                                            <td>Larry</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                </div>

                                      
                                            </div>
                                    </div>
                            </div>
@endsection

