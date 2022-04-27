@extends('layouts.home')

@section('metaTitle', ' | ' . $comic->title)

@section('mainContent')
    <table>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Thumb</th>
            <th>Series</th>
            <th>Description</th>
            <th>Type</th>
            <th>Sale Date</th>
            <th>Price</th>
            <th>Edit</th>
        </tr>

        <tr>
            <td>
                <strong>
                    {{ $comic->id }}
                </strong>
            </td>
            <td>{{ $comic->title }}</td>
            <td>
                <figure>
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                </figure>
            </td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->description }}</td>
            <td>{{ $comic->type }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>${{ number_format((float) $comic->price, 2, ',', '') }}</td>
            <td>
                <a href="{{ route('comics.edit', $comic) }}" class="view_edit_button">
                    <i class="fa-solid fa-pen"></i>
                </a>
            </td>
        </tr>
    </table>

    <div class="container_show">
        <div class="go_back">
            Torna alla pagina precedente
            <a href="{{ route('comics.index') }}"><i class="fa-solid fa-arrow-left-long"></i></a>
        </div>
    </div>
@endsection
