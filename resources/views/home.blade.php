<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layout/head-script')
    <body>
           <div id="app" class="max-w-full">
    
                 <div class="header-bottom sticky w-full bg-default top-0 h-auto z-10">
                    <a href="/" class="h-full w-full bg-default">
                        <img src="{{asset('images/header_logo.png')}}" alt="" class="w-3/5 h-auto"> 
                    </a>
                </div>
                <dashboard-carousel></dashboard-carousel>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 xl:gap-8 px-3">
                    <div class="content p-2 mt-4">
                            <div class="content-title">
                               <h2 class="color-default text-3xl font-bold">The BulSU Transparent Seal</h2>
                            </div>
                            <div class="content-body">
                            A pearl buried inside a tightly-shut shell is practically worthless. Government information is a pearl, meant to be shared with the public in order to maximize its inherent value.The Transparency Seal, depicted by a pearl shining out of an open shell, is a symbol of a policy shift towards openness in access to government information. On the one hand, it hopes to inspire Filipinos in the civil service to be more open to citizen engagement; on the other, to invite the Filipino citizenry to exercise their right to participate in governance…
                            <br>
                            <a href="https://bulsu.edu.ph/transparency-seal/" class="color-default-link text-xl">Read more...</a>
                            </div>
                    </div>
                    <div class="content p-2 mt-4">
                        <div class="content-title">
                                <h2 class="color-default text-3xl font-bold">About BulSU</h2>
                                </div>
                                <div class="content-body">
                                Bulacan State University (BulSU) is a state-funded institution of higher learning established in 1904 and converted into a university in 1993 by virtue of Republic Act 7665.The University in mandated to provide higher professional/technical and special instruction for special purpose and to promote research and extension services, advanced studies and extension services, advanced studies and progressive leadership in Engineering, Architecture, Education, Art and Science, Fine Arts, Information Technology, Technical courses, Commerce…
                                <br>
                                <a href="https://bulsu.edu.ph/about" class="color-default-link text-xl">Read more...</a>
                                </div>
                        </div>
                    <div class="content p-2 mt-4">
                            <div class="card">
                                <div class="card-header bg-default-1 d-block text-center p-4">
                                        <img src="{{asset('images/logo.png')}}" alt="" class="w-1/5 md:w-2/5 m-auto ">
                                        <span class="text-white font-bold text-2xl text-center">Bulacan State University</span>
                                </div>
                                <div class="card-body bg-default relative">
                                        @if(Session::get('fail'))
                                        <span class="text-danger font-weight-bold text-center  text-sm text-red-500 mb-3">{{ Session::get('fail') }}</span>
                                        @endif
                                        <div class="flex">
                                            <span class="text-white"><i class="fas fa-lock mr-2"></i>Sign-in your account</span>
                                        </div>

                                        <div class="forms">
                                            <form action="login" method="post" class="mt-3">
                                            @csrf
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="usn"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Username" aria-label="username" aria-describedby="usn" name="username">
                                                </div>

                                                <div class="input-group ">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="pwd"><i class="fas fa-lock"></i></span>
                                                    </div>
                                                    <input type="password" class="form-control" placeholder="Password" aria-label="password" aria-describedby="pwd" password="password" name="password" autocomplete="password">
                                                </div>

                                                <div class="mt-3">
                                                        <button class="form-control btn bg-default-1 btn-md text-white hover:bg-yellow-600 font-bold">
                                                            <i class="fas fa-key mr-2"></i>
                                                            Login
                                                        </button>
                                                </div>

                                            </form>
                                        </div>

                                </div>
                            </div>

                    </div>
                </div>
                

           </div>
    </body>
    @include('layout/footer')
    <script src="{{ asset('js/app.js') }}"></script>
</html>
<script>
const app = new Vue({
    el: '#app',
});


</script>
