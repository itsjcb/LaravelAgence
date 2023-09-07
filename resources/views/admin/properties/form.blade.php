@extends('admin.admin')

@section('title', $property->exists ? "Modify a property" : "Add a property")

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}" method="post">

    @csrf
    @method($property->exists ? 'put' : 'post')

    @include('shared.input', ['label'=> 'Title', 'name' => 'title', 'value' => $property->title])

    <div>
        <button class="btn btn-primary">
            @if ($property->exists)
                Modify
            @endif
                Create
        </button>
    </div>
    </form>

@endsection
