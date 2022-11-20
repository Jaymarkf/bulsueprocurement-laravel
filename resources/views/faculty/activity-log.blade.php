<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
<body>
    
    @include('layout/faculty-header',array('faculty'=>'faculty'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/faculty','/faculty/activity-log'),
            'text'=> array('faculty','activity-log')
        )))

    @include('layout/activity-log')
    @include('layout/footer')
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
