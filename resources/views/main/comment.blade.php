@foreach($items as $item)
    <div class="g_coments__item">
        <a href="#" class="g_coments__ava" style="background-image: url('{{asset('/images/user/' . $item->user->user_image)}}');"></a>
        <div>
            <div class="g_coments__name">
                <a id="{{$item->id}}" class= "answer" href="#">{{$item->user->name}}</a>
                @if(!$item->parent_id == null)
                    <small class="p_small">
                        <svg width="26" height="23" viewBox="0 0 26 23"><path fill="#ffc900" d="M.28 7.63L7.7.28C7.9.09 8.1 0 8.36 0c.25 0 .47.09.65.28.18.18.28.39.28.64V4.6h3.25c6.9 0 11.12 1.93 12.7 5.79.5 1.29.76 2.88.76 4.79 0 1.59-.61 3.75-1.84 6.48l-.16.35-.2.43a1.5 1.5 0 0 1-.18.31c-.12.17-.25.25-.4.25a.42.42 0 0 1-.35-.15.51.51 0 0 1-.12-.36c0-.08.01-.21.04-.38l.03-.33c.05-.66.08-1.24.08-1.77 0-.97-.09-1.84-.26-2.6a7.69 7.69 0 0 0-.7-1.99 4.93 4.93 0 0 0-1.16-1.45 6.79 6.79 0 0 0-3.46-1.61c-.74-.15-1.49-.26-2.24-.31a32.2 32.2 0 0 0-2.54-.09H9.29v3.68a.9.9 0 0 1-.28.65.9.9 0 0 1-.65.27.9.9 0 0 1-.66-.27L.28 8.93a.9.9 0 0 1 0-1.3z"/></svg>
                        ответ для {{$item->parent_comment->user->name}}</small>
                @endif
            </div>
            <p>{{$item->text}}</p>
            <div class="g_coments__name">
                @if(Auth::check() && (Auth::id() == $item->user_id || Auth::user()->role === 'admin'))
                    {{Form::open(['url' => route('comments.destroy',['id' => $item->id]) , 'type' => 'post', 'class' => 'deleting_form'])}}
                    {{method_field('DELETE')}}
                    <button class="btn btn-danger">
                        <i class="fa fa-trash-o fa-lg"></i> Удалить</button>
                    {{Form::close()}}
                @endif
                <small class="h4_small"><svg style="padding-left: 90px;" width="20" height="20" viewBox="0 0 20 20"><path fill="#bebebe" d="M0 10a10 10 0 1 0 20 0 10 10 0 0 0-20 0zm10.08 1.9H10a.7.7 0 0 1-.7-.69V4.15a.7.7 0 0 1 1.4 0v6.37h3.62a.7.7 0 0 1 0 1.38z"/></svg>{{$item->created_at->format('d.m.Y H:i:s')}}</small>
            </div>
                    @if(isset($comments[$item->id]))
                        @include('main.comment', ['items' => $comments[$item->id]])
                    @endif
                </div>
            </div>
@endforeach