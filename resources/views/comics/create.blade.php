@extends('layouts.home')

@section('metaTitle', ' | Create')

@section('mainContent')
    <h1>Inserimento nuovo articolo</h1>

    <form action="">

        <label for="title">Titolo fumetto</label>
        <input type="text" name="title" id="title" placeholder="Es. Batman Beyond...">

        <label for="series">Collezione</label>
        <input type="text" name="series" id="series" placeholder="Es. American Vampire 1976...">

        <label for="price">Prezzo</label>
        <input type="text" name="price" id="price" placeholder="Inserisci un prezzo...">

        <label for="description">Descrizione</label>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Inserisci una descrizione..."></textarea>

        <label for="type">Tipo fumetto</label>
        <select name="type" id="type">
            <option value="" selected disabled>Seleziona una tipologia</option>
            <option value="comic_book">Comic book</option>
            <option value="graphic_novel">Graphic novel</option>
        </select>

        <input type="submit" value="Invia" id="submint">
    </form>
@endsection
