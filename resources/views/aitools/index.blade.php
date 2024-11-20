@extends('layout')

@section('content')

<h1>AI eszközök
    <a href="{{route('aitools.create') }}" title="Új AI eszköz">🧞</a>
</h1>

@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<ul>
@foreach($aitools as $aitool)
<li class="actions">
    {{$aitool->name}}
    <a href="{{route('aitools.show', $aitool->id) }}" class="button">Megjelenítés</a>
    <a href="{{route('aitools.edit', $aitool->id) }}" class="button" >Szerkeztés</a>
    <form action="{{route('aitools.destroy', $aitool->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="danger" onclick="return confirm('Tutira töröljük?')" >Törlés</button>
    </form>
</li>
@endforeach
</ul>
@endsection