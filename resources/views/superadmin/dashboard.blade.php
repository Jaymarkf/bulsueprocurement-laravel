<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
  <div id="app">
    @include('layout/header')
    @include('layout/breadcrumbs-and-year')
    @include('layout/admin-dashboard-table')
  </div>

</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>