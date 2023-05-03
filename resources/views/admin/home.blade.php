<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
        
        <!-- partial -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')
        @include('admin.body')

       
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
   
  </body>
</html>