@if(count($tweets) > 0)
<div class="rounded-sm" style="overflow:auto;margin-top:5%;border:1px solid #dbd9d9">  
    
    @foreach($tweets as $tweet)
    <div style="border-bottom:1px solid #dbd9d9;overflow:auto;padding-top:3%;">
        <div class="col-sm-1" style="float:left">
        <a href="{{ route('profile', $tweet->user->name)}}"><img height="50px" src='https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortRound&accessoriesType=Blank&hairColor=BrownDark&facialHairType=BeardMedium&facialHairColor=Black&clotheType=GraphicShirt&clotheColor=PastelBlue&graphicType=Resist&eyeType=Wink&eyebrowType=RaisedExcitedNatural&mouthType=Sad&skinColor=Brown'
                    /></a>
                    
        </div>
        <div class="col-sm-11" style="float:left"> 
            <h5 class="font-weight-bold"><a href="{{ route('profile', $tweet->user->name)}}">{{$tweet->user->name}}</a></h5>

            <p>{{$tweet->body}}</p>
        
        </div>
    </div>
    @endforeach     
       
</div>
@else

<h3 class="text-danger">No Tweets found</h3>
@endif 