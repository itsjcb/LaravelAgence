@extends('admin.admin')

@section('title', 'All properties')

@section('content', )
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.property.create') }}" class="btn btn-primary">
        Add a property </a>
    </div>

    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th>Title</th>
            <th>Surface</th>
            <th>Price</th>
            <th>City</th>
            <th class="text-end">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($properties=properties as $property )
            <tr>
                <td>{{ $property->title }}</td>
                <td>{{ $property->surface }}m2</td>
                <td>{{ number_format($property->price, thousands_separator: ' ') }}</td>
                <td>{{ $property->city }}</td>
                <td>
                    <div class="d-flex gap-2 w-100 justify-content-end">
                        <a href="{{ route('admin.property.edit', $property) }}" class="btn btn-primary">Editer</a>
                        <form action="{{ route('admin.property.destroy', $property) }}" method="post">
                        {{-- Laravel inclut un plug-in CSRF intégré, qui génère des jetons pour chaque session utilisateur active.
                        Ces jetons vérifient que les opérations ou les demandes sont envoyées par l’utilisateur authentifié concerné. --}}
                            @csrf
                            @method("delete")
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
             </tr>
        @endforeach
        </tbody>
    </table>

    {{ $properties->links() }}

@endsection
