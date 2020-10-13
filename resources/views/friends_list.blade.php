<h4 class="font-weight-bold">Following</h4>
<div class="container" style="margin-bottom:10%">
    <ul class="list-unstyled">
        @foreach(auth()->user()->follows as $user)
        <li style="margin-bottom:5%">
            <div class="row friend-list">
            <a href="{{ route('profile', $user)}}"><img src='https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortRound&accessoriesType=Blank&hairColor=BrownDark&facialHairType=BeardMedium&facialHairColor=Black&clotheType=GraphicShirt&clotheColor=PastelBlue&graphicType=Resist&eyeType=Wink&eyebrowType=RaisedExcitedNatural&mouthType=Sad&skinColor=Brown'
                /></a>
                <span class=""><a href="{{ route('profile', $user)}}">{{$user->name}}</a></span>
            </div>
        </li>
        @endforeach
    </ul>
</div>