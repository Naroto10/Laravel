<!-- mnin tywrt-->
@extends('templet.master')

@section('title')
My todos
@endsection('title')


@section('content')
<ul>
    <!--hna db andro bx mni iklik idna l xu blsa-->
@foreach($todos as $todo )
<!--todo hya smiya ta3 route ta3i todo1 ga smiya usf li fuha tyth id-->
<li><a href="{{route ('todo' ,['todo1'=>$todo->id])}}">{{$todo->content}}</a></li>
@endforeach
</ul>
@endsection('content')
