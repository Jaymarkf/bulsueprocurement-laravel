<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/faculty-header',array('faculty'=>'/faculty'))
        
        @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/faculty','/faculty/set-ppmp-year'),
            'text'=> array('faculty','year')
        )))
        <div class="admin-table-container">
            <form action="#" method="POST">
            @include('layout/year')
            </form>
        </div>


        @include('layout/footer')    
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
