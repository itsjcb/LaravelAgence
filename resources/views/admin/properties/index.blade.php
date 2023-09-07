@extends('admin.admin')

@section('title', 'All properties')

@section('content', )
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.property.create') }}" class="btn btn-primary">
        Add a property </a>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Title</th>
            <th>Surface</th>
            <th>Price</th>
            <th>City</th>
            <th>Actions</th>
            <th class="text-end">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($properties as $property )
            <tr>
                <td>{{ $property->title }}</td>
                <td>{{ $property->surface }}m2</td>
                <td>{{ number_format($property->price, thousands_separator: ' ') }}</td>
                <td>{{ $property->city }}</td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $properties->links() }}

@endsection
