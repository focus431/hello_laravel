<a href="{{route('users.show',$user->name)}}"></a>
    <img src="{{$user->gravatar('140')}}" alt="{{$user->name}}" class="gravatar"/>
</a>
<h1>{{ $user->name}}</h1>    