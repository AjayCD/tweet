@extends('layouts.login_layout')

@section('content')
    <header>
        <img width="100%" class="card-img" style="border-radius:3%" src="https://community.khoros.com/t5/image/serverpage/image-id/152744iA214CD2E3F832766/image-size/large/is-moderation-mode/true?v=1.0&px=999" alt="">
        <div class="row">
            <div class="container mt-2">
                <div class="col-md-8 float-left" style="padding:0">
                    <h3 class="font-weight-bolder">{{$user->name}}</h3>
                    <p class="font-weight-bold font-italic">Joined {{$user->created_at->diffForHumans()}}</p>
                </div> 
                <div class="col-md-4 float-left" style="padding:0">
                    <button class="btn btn-outline-secondary font-weight-bold" type="submit">Edit Profile</button>                  
                    <button class="btn btn-info text-white font-weight-bold" type="submit">Follow Me</button> 
                </div>   
            </div>
            <img class="rounded-circle img-fluid" width="20%" style="top:80px;left:40%;position:absolute" src='https://organicthemes.com/demo/profile/files/2018/05/profile-pic.jpg'
                /> 
            <div class="container text-center">  
                <p>"I am an enthusiastic, self-motivated, reliable,responsible and hardworking person. I ama mature team worker and adaptable to all challenging situations. I amable to work well both in a team environment as well as using own initiative. I am able to work well under pressure and adhere to strict deadlines."</p>
            </div> 
        </div>
    </header>
    @include('timeline' ,[ 'tweets'=> $user->tweets])
@endsection