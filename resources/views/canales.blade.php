@extends('layouts.master')

@section('css')
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="{{ URL::asset('plugins/jquery-steps/jquery.steps.css') }}">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
     <h4 class="page-title">Dashboard</h4>
     <ol class="breadcrumb">
         <li class="breadcrumb-item active">Welcome to Veltrix Dashboard</li>
     </ol>
</div>
@endsection

@section('content')
                   
    
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Crear de Canal</h4>
                                            <p class="text-muted m-b-30 font-14">Por favor rellene todos los datos para la creación de su canal</p>
            
                                            <form id="form-horizontal" class="form-horizontal form-wizard-wrapper">
                                                <h3>Persona Encargada</h3>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Nombre </label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtFirstNameBilling" name="txtFirstNameBilling" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Email</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtLastNameBilling" name="txtLastNameBilling" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtCompanyBilling" class="col-lg-3 col-form-label">Telefono</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtCompanyBilling" name="txtCompanyBilling" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtEmailAddressBilling" class="col-lg-3 col-form-label">web</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    
                                                </fieldset>

                                                <h3>Información Canal</h3>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtFirstNameShipping" class="col-lg-4 col-form-label">Nombre de Canal</label>
                                                                <div class="col-lg-8">
                                                                    <input id="txtFirstNameShipping" name="txtFirstNameShipping" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtLastNameShipping" class="col-lg-4 col-form-label">Logo del Canal</label>
                                                                <div class="col-lg-8">
                                                                        <input type="file" class="filestyle" data-buttonname="btn-secondary">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                                <div class="form-group row">
                                                                        <label for="ddlCreditCardType" class="col-lg-4 col-form-label">Eligir tipo de Canal</label>
                                                                        <div class="col-lg-8">
                                                                            <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                                                                                <option value="">--Elegir--</option>
                                                                                <option value="AE">VOD Live</option>
                                                                                <option value="VI">Live Streaming</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label for="txtLastNameShipping" class="col-lg-4 col-form-label">Fondo Thumbnail</label>
                                                                    <div class="col-lg-8">
                                                                            <input type="file" class="filestyle" data-buttonname="btn-secondary">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
            
                                                    
            
                                                </fieldset>
                                                <h3>Datos Livestreaming</h3>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtNameCard" class="col-lg-3 col-form-label">Nombre Instancia</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtNameCard" name="txtNameCard" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Key</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtCreditCardNumber" name="txtCreditCardNumber" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </fieldset>

                                                <h3>Confirmar Creación</h3>
                                                <fieldset>
                                                    <div class="p-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1">I agree with the Terms and Conditions.</label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
            
            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="mt-0 header-title">Canales Creados</h4>
                                                <div  class="row">  
                                                <div class="col-md-6 col-lg-6 col-xl-3">
 
                                                <div class="card">
                                                        <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title font-16 mt-0">Card title</h4>
                                                            <a href="#" class="btn btn-primary waves-effect waves-light">Ver</a>
                                                        </div>
                                                </div>
                                                </div>
                                            </div> 
                                            </div>
                                        </div> 
                                    </div>  
                                </div>             

@endsection

@section('script')
<!--Chartist Chart-->
<script src="{{ URL::asset('plugins/chartist/js/chartist.min.js') }}"></script>
<script src="{{ URL::asset('plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script>
<!-- peity JS -->
<script src="{{ URL::asset('plugins/peity-chart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/dashboard.js') }}"></script>
@endsection