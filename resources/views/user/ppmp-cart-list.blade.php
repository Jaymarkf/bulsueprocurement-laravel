<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
<body>
    @include('layout/user-header',array('user'=>'user'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/user','/user/ppmp-cart-list'),
            'text'=> array('user','ppmp-cart-list')
        )))

    @include('layout/ppmp-cart-list')
    @include('layout/footer')
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
