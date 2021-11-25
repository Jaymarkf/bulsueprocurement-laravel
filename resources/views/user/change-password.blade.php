<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/user-header',array('user'=>'/user'))
        
        @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/user','/user/change-password'),
            'text'=> array('user','change-password')
        )))
        <form action="#" method="POST">
        @include('layout/change-password')
        </form>
        @include('layout/footer')    
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
