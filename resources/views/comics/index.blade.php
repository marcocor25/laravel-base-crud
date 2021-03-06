@extends('layouts.home')

@section('metaTitle', '| Index')

@section('mainContent')
    <table>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Thumb</th>
            <th>Series</th>
            <th>Type</th>
            <th>Sale Date</th>
            <th>Price</th>
            <th>View</th>
            <th>Delete</th>
        </tr>

        @foreach ($comics as $el)
            <tr>
                <td>
                    <strong>
                        {{ $el->id }}
                    </strong>
                </td>
                <td>{{ $el->title }}</td>
                <td>
                    <figure>
                        <img src="{{ $el->thumb }}" alt="{{ $el->title }}">
                    </figure>
                </td>
                <td>{{ $el->series }}</td>
                <td>{{ $el->type }}</td>
                <td>{{ $el->sale_date }}</td>
                <td>${{ number_format((float) $el->price, 2, ',', '') }}</td>
                <td>
                    <a href="{{ route('comics.show', $el) }}" class="view_edit_button">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                </td>
                <td>
                    <form action="{{ route('comics.destroy', $el) }}" method="POST">

                        @csrf

                        @method('DELETE')

                        <button type="submit" class="delete">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>

                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
