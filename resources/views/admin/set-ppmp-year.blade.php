<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layout/head-script')
 <body>
  <div>
      
    @include('layout/header',array('user'=>'admin'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/set-ppmp-year'),
            'text'=> array('admin','set ppmp year')
    )))
    @include('layout/year')
    @include('layout/footer')
  </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>