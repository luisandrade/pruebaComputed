@extends('layouts.master-blank')

@section('content')
        <div class="home-btn d-none d-sm-block">
            <a href="index" class="text-white"><i class="fas fa-home h2"></i></a>
        </div>
        
        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page account-page-full">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <a href="index" class="logo"><img src="{{ URL::asset('assets/images/logo-light.png') }}" height="60" alt="logo"></a>
                    </div>
                    <div class="p-3">
                        
                        <form class="form-horizontal m-t-30" action="index">
                            <div class="form-group">
                                <label for="username">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="username" placeholder="Ingresar Nombre de Usuario">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" id="userpassword" placeholder="Ingresar password">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Recordar Contraseña</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Ingresar</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="pages-recoverpw-2"><i class="mdi mdi-lock"></i> Olvidaste tu password?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="m-t-40 text-center">
                <p>© {{date('Y')}} Director Cloud. Creado con <i class="mdi mdi-heart text-danger"></i> by Grupo Z</p>
            </div>
        </div>
        <!-- end wrapper-page -->
@endsection

@section('script')
@endsection