<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
<body>
    @include('layout/faculty-header',array('faculty'=>'faculty'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/faculty','/faculty/ppmp-log-history'),
            'text'=> array('faculty','ppmp-log-history')
        )))

    @include('layout/ppmp-log-history')
    @include('layout/footer')
    <!-- CSS -->
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
