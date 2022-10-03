@extends('layout.index')

@section('content')
<div style="display: grid; grid-template-columns: repeat(3, 1fr); width:80%; justify-content:center; margin: 0 auto;gap: 1rem;">
    @foreach ($types as $type)
    <div style="display:flex;gap: 1rem; margin: 1rem 0;border: 1px solid silver;padding: 1rem;">
        <div>{{$type -> nom}}</div>
        <div>
            <a href="/typesformations/{{$type->id}}">
            <button type="submit">
                show
            </button>
            </a>
        </div>

        <div>
            <form style="display:inline;" action="/typesformations/{{$type->id}}/delete" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </div>
    </div>
    @endforeach
    </div>
    <div style="width: 80%; margin: 3rem auto;display:flex; justify-content:center;">
    <form action="/typesformations/deleteAll" method="POST">
        @csrf
    <button type="submit">delete all</button>
    </form>
    </div>
@endsection
