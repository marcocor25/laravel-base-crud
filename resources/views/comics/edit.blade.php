@extends('layouts.home')

@section('metaTitle', ' | Edit')

@section('mainContent')

    <h1>Modifica articolo</h1>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="form">

        @csrf

        @method('PUT')

        <label for="title">Titolo fumetto</label>
        <input value="{{ $comic->title }}" type="text" name="title" id="title" placeholder="Es. Batman Beyond...">

        <label for="thumb">Link copertina</label>
        <input value="{{ $comic->thumb }}" type="text" name="thumb" id="thumb" placeholder="Es. https://www.dccomics.com/...">

        <label for="series">Serie / Collezione</label>
        <input value="{{ $comic->series }}" type="text" name="series" id="series" placeholder="Es. American Vampire 1976...">

        <label for="type">Tipologia fumetto</label>
        <select name="type" id="type">
            <option selected disabled>Seleziona una tipologia</option>
            <option value="comic book" {{ $comic->type == 'comic book' ? 'selected' : '' }}>Comic book</option>
            <option value="graphic novel" {{ $comic->type == 'graphic novel' ? 'selected' : '' }}>Graphic novel</option>
        </select>

        <label for="sale_date">Data pubblicazione</label>
        <input value="{{ $comic->sale_date }}" type="date" name="sale_date" id="sale_date">

        <label for="price">Prezzo al pubblico</label>
        <input value="{{ $comic->price }}" type="text" name="price" id="price" placeholder="Inserisci un prezzo...">

        <label for="description">Descrizione</label>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Inserisci una descrizione...">{{ $comic->description }}</textarea>

        <div class="input-wrapper">
            <input type="reset" value="Reset" id="reset">
            <input type="submit" value="Invia" id="submint">
        </div>

    </form>
    
@endsection
