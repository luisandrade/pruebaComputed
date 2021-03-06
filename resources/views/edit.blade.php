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

<div id="app">
    <editar-component></editar-component>
</div>
                 
@endsection

@section('script')
<!--tinymce js-->
<script src="{{ URL::asset('plugins/tinymce/tinymce.min.js') }}"></script>
<!--Summernote js-->
<script src="{{ URL::asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/form-editors.int.js') }}"></script>
@endsection