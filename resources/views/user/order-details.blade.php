<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
<body>
    @include('layout/user-header',array('user'=>'user'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/user','/user/order-details-item'),
            'text'=> array('user','order-details-item')
        )))

    @include('layout/order-details')
    @include('layout/footer')
</body>
</html>
