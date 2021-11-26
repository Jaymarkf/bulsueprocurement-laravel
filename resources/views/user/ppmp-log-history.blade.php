<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
<body>
    @include('layout/user-header',array('user'=>'user'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/user','/user/ppmp-log-history'),
            'text'=> array('user','ppmp-log-history')
        )))

    @include('layout/ppmp-log-history')
    @include('layout/footer')
    <!-- CSS -->
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
