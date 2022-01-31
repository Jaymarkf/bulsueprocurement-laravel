<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/faculty-header',array('faculty'=>'/faculty'))
        
        @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/faculty','/faculty/change-password'),
            'text'=> array('faculty','change-password')
        )))
        <form action="#" method="POST">
        @include('layout/change-password')
        </form>
        @include('layout/footer')    
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
