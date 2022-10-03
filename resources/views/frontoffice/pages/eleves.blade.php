@extends('layout.index')

@section('content')
<div style="display: grid; grid-template-columns: repeat(3, 1fr); width:80%; justify-content:center; margin: 0 auto;gap: 1rem;">
    @foreach ($eleves as $eleve)
    <div style="display: flex; flex-direction:column">
        <div style="display:grid;grid-template-columns:repeat(6, 1fr);padding: 0 1rem; margin-top: 1rem">
            <div>nom</div>
            <div>prenom</div>
            <div>age</div>
            <div>emploi?</div>
            <div>éditer</div>
            <div>supprimer</div>
    </div>
    <div style="display:grid;grid-template-columns:repeat(6, 1fr);gap:1rem; margin: 1rem 0;border: 1px solid silver;padding: 1rem;">
        <div>{{$eleve -> nom}}</div>
        <div> {{$eleve -> prenom}}</div>
        <div> {{$eleve -> age}}</div>
        @if ($eleve->etat == true)
            oui.
        @else
            non.
        @endif

        <div>
            <a href="/eleves/{{$eleve->id}}">
            <button type="submit">
                show
            </button>
            </a>
        </div>

        <div>
            <form style="display:inline;" action="/eleves/{{$eleve->id}}/delete" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </div>
    </div>
    </div>

    @endforeach
    </div>
    <div style="width: 80%; margin: 3rem auto;display:flex; justify-content:center;">
        <form action="/eleves/deleteAll" method="POST">
            @csrf
        <button type="submit">delete all</button>
        </form>
    </div>

@endsection
