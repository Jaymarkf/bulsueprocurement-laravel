<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
 <body>
    <div id="app">
        @include('layout/header')
        @include('layout/breadcrumbs-and-year')
        
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-default">
                    <span class="text-base text-white">Consolidated Annual Procurement Plan - <p class="badge bg-yellow-500 text-sm badge-pill">Year 0001</p></span>
                </div>
                <div class="card-body">

                </div>
                <div class="card-footer d-flex">
                    <button class="btn btn-dark btn-sm mr-auto hover:bg-gray-400"><i class="fas fa-arrow-alt-circle-left mr-2"></i>back</button>
                    <button class="btn bg-green-700 text-white btn-sm ml-auto mr-2 hover:bg-green-500"><i class="fas fa-box mr-2"></i>consolidate</button>
                    <button class="btn bg-yellow-700 btn-sm text-white hover:bg-yellow-500"><i class="fas fa-sync-alt mr-2"></i>reset</button>
                </div>
            </div>
        </div>
    
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>