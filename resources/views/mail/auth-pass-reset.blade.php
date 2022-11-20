@component('mail::message')

Hello {{$username}} 

@component('mail::button', ['url' => route('reset-code',$reset_code)])
Click here to reset your password
@endcomponent
<p>Or copy & paste the following link to your browser</p>
<!-- <p><a href="{{route('reset-code',$reset_code)}}">{{route('reset-code',$reset_code)}}</a></p> -->

Thanks,<br>
{{ config('app.name') }}
@endcomponent
