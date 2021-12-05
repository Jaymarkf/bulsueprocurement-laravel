<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
<body>
    @include('layout/supplier-header',array('supplier'=>'supplier'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/supplier','/supplier/property-acknowledgement-report'),
            'text'=> array('supplier','property-acknowledgement-report')
        )))
    @include('layout/supplier-par')
    @include('layout/footer')
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>