<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
<body>
    @include('layout/header',array('user'=>'admin'))
    @include('layout/admin-user-body')
    @include('layout/footer')

</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>