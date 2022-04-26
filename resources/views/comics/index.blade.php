@extends('layouts.home')

@section('metaTitle', '| Index')

@section('mainContent')
    <table>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Thumb</th>
            <th>Series</th>
            <th>Sale Date</th>
            <th>Type</th>
            <th>View</th>
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
                <td>{{ $el->sale_date }}</td>
                <td>{{ $el->type }}</td>
                <td>
                    <a href="{{ route('comics.show', $el) }}" class="view_button">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
