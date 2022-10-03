@extends('layout.index')

@section('content')
<div style="display:flex;gap: 1rem; margin: 1rem 0;border: 1px solid silver;padding: 1rem;">
<form action="/backBatiments/{{$id_show->id}}/update" method="POST">
    @csrf
    @method('PUT')
    <input type="text" value={{$id_show ->nom}} name="nom">
    <input type="text" value={{$id_show ->prenom}} name="prenom">
    <input type="submit" value="Update">
</form>
</div>
@endsection
