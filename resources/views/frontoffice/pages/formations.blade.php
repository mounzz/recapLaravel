@extends('layout.index')

@section('content')
<div style="display: grid; grid-template-columns: repeat(3, 1fr); width:80%; justify-content:center; margin: 0 auto;gap: 1rem;">
    @foreach ($formations as $formation)
    <div style="display:flex;gap: 1rem; margin: 1rem 0;border: 1px solid silver;padding: 1rem;">
        <div>{{$formation -> nom}}</div>
        <div> {{$formation -> description}}</div>
        <div>
            <a href="/formations/{{$formation->id}}">
            <button type="submit">
                show
            </button>
            </a>
        </div>

        <div>
            <form style="display:inline;" action="/formations/{{$formation->id}}/delete" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </div>
    </div>
    @endforeach
    </div>
    <div style="width: 80%; margin: 3rem auto;display:flex; justify-content:center;">
    <form action="/formations/deleteAll" method="POST">
        @csrf
    <button type="submit">delete all</button>
    </form>
    </div>
@endsection
