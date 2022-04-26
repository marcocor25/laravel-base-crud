@extends('layouts.home')

@section('mainContent')
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Thumb</th>
            <th>Series</th>
            <th>Sale Date</th>
            <th>Type</th>
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
            </tr>
        @endforeach
    </table>
@endsection
