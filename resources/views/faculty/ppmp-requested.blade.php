<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
<body>
    @include('layout/faculty-header',array('faculty'=>'faculty'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/faculty','/faculty/ppmp-requested'),
            'text'=> array('faculty','ppmp-requested')
        )))

    @include('layout/ppmp-requested')
    @include('layout/footer')
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
