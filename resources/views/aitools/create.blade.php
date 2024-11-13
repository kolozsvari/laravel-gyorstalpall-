@extends('layout')
@section('content')

<h1>Új AI Eszköz</h1>


@error('name')
<div class="alert alert-warning">{{$message}}</div>
@enderror


<form action="{{route('categories.store')}}" method="post">
    @csrf
    <fieldset>
    <label for="name">Az AI eszköz neve</label>
    <input type="text" name="name" id="name">
    </fieldset>

    <label for="category">Kategória</label>
    <select name="category_id" id="category_id">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name}}</option>
        @endforeach
    </select>
    </fieldset>

    <fieldset>
    <label for="description">Leírás</label>
    <textarea name="description" id="description"></textarea>
    </fieldset>
    <fieldset>
    <label for="link">Link</label>
    <input type="text" name="link" id="link">
    </fieldset>
    <label for="hasFreePlan">Van ingyenes változat?</label>
    <input type="hasFreePlan" name="hasFreePlan" id="hasFreePlan">
    </fieldset>
    <label for="price">Ár (havonta Ft-ban)</label>
    <input type="number" name="price" id="price">
    </fieldset>
    <button type="submit">Ment</button>
</form>
@endsection