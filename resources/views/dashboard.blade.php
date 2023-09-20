{{-- {{$users[0]['name']}} --}}

@foreach ($users as $user)

<h1>
    {{$user['name']}}
</h1>
<h2>
    {{$user['age']}}
</h2>

@if ($user['age']<18) <h2>{{$user['name']}} can not drive</h2>
    @endif
    <hr>
    @endforeach