<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
<body>
    @include('layout/user-header',array('user'=>'user'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/user','/user/ppmp-requested'),
            'text'=> array('user','ppmp-requested')
        )))

    @include('layout/ppmp-requested')
    @include('layout/footer')
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
