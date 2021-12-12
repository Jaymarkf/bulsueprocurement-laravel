<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
<body>
    @include('layout/supplier-header',array('supplier'=>'supplier'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/supplier','/supplier/'),
            'text'=> array('supplier','supplier')
        )))
    @include('layout/supplier-body')
    @include('layout/footer')
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" defer> </script>
<script>
        $(document).ready( function () {
            $('#suppliertable, #supplierpartable').DataTable();
        });
    
</script>
</html>
