<div>
    Hi,{{ $name }}
    Please use the following link to verify the email
    <a href="{{url('/userinfo').'?'.http_build_query(['email'=>$email,'id'=>$id])}}" class="d-block mt-3 ">Verify</a>
</div>
