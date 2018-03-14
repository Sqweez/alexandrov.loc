@extends('layouts.admin')
@section('content')
    <div class="container" style="padding-left: 340px">
    <table class="table">
   <thead>
   <tr>
       <th>Имя</th>
       <th>Логин</th>
       <th>Почта</th>
       <th>Роль</th>
       <th>Аватар</th>
       <th>Редактировать</th>
       <th>Забанить</th>
       <th>Удалить</th>
   </tr>
   </thead>
    @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->login}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td>{!! Html::image(asset('/images/user/'. $user->user_image),'', ['width' => '100px']) !!}</td>
            <td><a href="{{ route('users.edit',['users' => $user->id]) }}">
                    {!! Form::button('Изменить', ['class' => 'btn btn-warning', 'type' => 'submit']) !!}</a></td>
            <td>
                @if($user->role !== 'banned_users')
                <a href="{{ route('user.ban',['users' => $user->id]) }}">
                    {!! Form::button('Забанить', ['class' => 'btn btn-warning', 'type' => 'submit']) !!}
                </a>
                @else
                    <a href="{{ route('user.unban',['users' => $user->id]) }}">
                    {!! Form::button('Разбанить', ['class' => 'btn btn-success', 'type' => 'submit']) !!}
                    </a>
                @endif
            </td>

            <td>
                {!! Form::open(['url' => route('users.destroy',['user' => $user->id]), 'class' => 'form-horizontal',
                'method' => 'POST']) !!}
                {{method_field('DELETE')}}
                {!! Form::button('Удалить', ['class' => 'btn btn-warning', 'type' => 'submit']) !!}
                {!! Form::close() !!}
            </td>

        </tr>
    @endforeach
</table>
    </div>
    </div>
@endsection