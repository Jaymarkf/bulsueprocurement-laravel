<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layout/head-script')
 <body>
  <div>
      
    @include('layout/header')
    @include('layout/breadcrumbs-and-year')
    @include('layout/year')

  </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
<script>
    $(document).ready(function(){
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        var today  = new Date();
        $('#currentdate').html(today.toLocaleDateString("en-US",options));
    });
</script>