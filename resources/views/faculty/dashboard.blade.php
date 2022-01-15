<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
<body>
    @include('layout/faculty-header',array('faculty'=>'faculty'))
    @include('layout/user-breadcrumbs' ,array('breadcrumbs'=>array(
            'link'=> array('/faculty','/faculty/price-catalogue'),
            'text'=> array('faculty','price-catalogue')
        )))
    @include('layout/faculty-body')
    @include('layout/footer')
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
