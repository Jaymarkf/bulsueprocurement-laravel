<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
<body>
    @include('layout/supplier-header',array('supplier'=>'supplier'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/supplier','/supplier/inventory-custodian-form'),
            'text'=> array('supplier','inventory-custodian-form')
        )))

    @include('layout/supplier-ics')
    @include('layout/footer')
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" defer> </script>

<script>
        $(document).ready( function () {
            $('#manage-user').DataTable();
        });
    
</script>
</html>