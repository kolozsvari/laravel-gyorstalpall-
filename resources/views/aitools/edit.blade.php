@extends('layout')

@section('content')

@error('name')
<div class="alert alert-warning">{{$message}}</div>
@enderror

<form action="{{route('aitools.update', $aitool->id)}}" method="post">
    @csrf
    @method('PUT')
    <fieldset>
    <label for="name">Aitool Eszköz neve</label>
    <input type="text" name="name" id="name" value="{{old('name', $aitool->name) }}">
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
    <fieldset>
        <label for="hasFreePlan">Van ingyenes változat?</label>
        <input type="checkbox" name="hasFreePlan" id="hasFreePlan">
    </fieldset>
    <fieldset>
        <label for="price">Ár (havonta Ft-ban)</label>
        <input type="number" name="price" id="price">
    </fieldset>
    <button type="submit">Ment</button>
</form>
@endsection