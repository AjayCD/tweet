@extends('layouts.login_layout')

@section('content')
        
    <div class="post-area border border-info rounded-sm" style="padding:10px">
        <form method="POST" action="/tweets">
            @csrf
            <textarea class="form-control bg-transparent" name="body" cols="15" rows="5" placeholder="Tweet Here..."></textarea>
            @error('body')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <hr>
            <div class="row">
            <footer class="post-user container">                        
                    <img src='https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortRound&accessoriesType=Blank&hairColor=BrownDark&facialHairType=BeardMedium&facialHairColor=Black&clotheType=GraphicShirt&clotheColor=PastelBlue&graphicType=Resist&eyeType=Wink&eyebrowType=RaisedExcitedNatural&mouthType=Sad&skinColor=Brown'
                    />                        
                <button class="btn btn-info text-white font-weight-bold" type="submit">Tweet-a-roo!</button>                        
            </footer>
            </div>
        </form>
    </div>  
        @include('timeline')  
@endsection