<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
<body>
    @include('layout/header',array('user'=>'admin'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/manage-item-category'),
            'text'=> array('admin','manage-item-category')
        )))
    
    @include('layout/table-body')
    @include('layout/footer')

</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" defer> </script>

<script>
        $(document).ready( function () {
            $('#category-table').DataTable();
        });
    
</script>
</html>