<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>@yield('title')</title>
    @include('backend.partials._css')
  </head>
  <body>
  @include('backend.partials._navbar')  
<div class="container-fluid">
  <div class="row">
   @include('backend.partials._sidebar')  
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">@yield('dashboard-title')</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            @yield('side-title')
          </div>
        </div>
      </div>
      @yield('container')
    </main>
  </div>
</div>

@include('backend.partials._script')
    
  </body>
</html>
