<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
<body>
    
    @include('layout/user-header',array('user'=>'user'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/user','/user/activity-log'),
            'text'=> array('user','activity-log')
        )))

    @include('layout/activity-log')
    @include('layout/footer')
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
