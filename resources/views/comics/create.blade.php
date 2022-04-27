@extends('layouts.home')

@section('metaTitle', ' | Create')

@section('mainContent')
    <h1>Inserimento nuovo articolo</h1>

    <form action="{{ route('comics.store') }}" method="POST">

        @csrf

        <label for="title">Titolo fumetto</label>
        <input type="text" name="title" id="title" placeholder="Es. Batman Beyond..." required>

        <label for="thumb">Link copertina</label>
        <input type="text" name="thumb" id="thumb" placeholder="Es. https://www.dccomics.com/..." required>

        <label for="series">Serie / Collezione</label>
        <input type="text" name="series" id="series" placeholder="Es. American Vampire 1976..." required>

        <label for="type">Tipologia fumetto</label>
        <select name="type" id="type" required>
            <option value="" selected disabled>Seleziona una tipologia</option>
            <option value="comic_book">Comic book</option>
            <option value="graphic_novel">Graphic novel</option>
        </select>

        <label for="sale_date">Data pubblicazione</label>
        <input type="date" name="sale_date" id="sale_date" required>

        <label for="price">Prezzo al pubblico</label>
        <input type="text" name="price" id="price" placeholder="Inserisci un prezzo..." required>

        <label for="description">Descrizione</label>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Inserisci una descrizione..."></textarea>

        <div class="input-wrapper">
            <input type="reset" value="Reset" id="reset">
            <input type="submit" value="Invia" id="submint">
        </div>

    </form>
@endsection
