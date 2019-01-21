<ul>
@foreach($todos as $todo)
    <li>{{$todo->title}} {{$todo->completed ? '(done)' : ''}}</li>
@endforeach
</ul>