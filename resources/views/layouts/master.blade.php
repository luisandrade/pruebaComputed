<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Director Cloud- Canales 24/7 en la Nube</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        @include('layouts.head')
    </head>
<body>
    <div id="app">
        <div id="wrapper">
            @include('layouts.header')
            @include('layouts.sidebar')
            <div class="content-page">  
                <div class="content">
                    <div class="container-fluid">
                    @include('layouts.settings')    
                
                    <transition name="fade"> 
                        <router-view></router-view>
                    </transition>
           
                    </div>
                </div>
            </div>
        </div>
    </div>
    
            @include('layouts.footer')  
            @include('layouts.footer-script')  
        
            <script src="{{ URL::asset('plugins/jquery-steps/jquery.steps.min.js') }}"></script>
    </body>

    <style>
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>
</html>