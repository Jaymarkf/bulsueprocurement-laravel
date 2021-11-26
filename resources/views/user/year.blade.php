<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/user-header',array('user'=>'/user'))
        
        @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/user','/user/year'),
            'text'=> array('user','year')
        )))
        <form action="#" method="POST">
           @include('layout/year')
        </form>
        @include('layout/footer')    
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
