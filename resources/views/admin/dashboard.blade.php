<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
  <div>
    @include('layout/header',array('user'=>'/admin'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin'),
            'text'=> array('admin')
        )))
    @include('/admin/ppmp')
    @include('layout/footer')
  </div>

</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>