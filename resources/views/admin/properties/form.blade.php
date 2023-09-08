@extends('admin.admin')

@section('title', $property->exists ? "Modify a property" : "Add a property")

@section('content')

    <h1>@yield('title')</h1>

    <form class="vstack gap-2" action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}" method="post">

    @csrf
    @method($property->exists ? 'put' : 'post')

    <div class="row">
        @include('shared.input', ['class' => 'col','label' => 'Title', 'name' => 'title', 'value' => $property->title])
        <div class="col row">
            @include('shared.input', ['class' => 'col', 'name' => 'surface', 'value' => $property->surface])
            @include('shared.input', ['class' => 'col', 'name' => 'price', 'label' => 'Price', 'value' => $property->price])
        </div>
    </div>
    @include('shared.input', ['type' => 'textarea', 'class' => 'col', 'name' => 'description', 'value' => $property->description])
    <div class="row">
        @include('shared.input', ['class' => 'col', 'name' => 'rooms', 'label' => 'Room', 'value' => $property->rooms])
        @include('shared.input', ['class' => 'col', 'name' => 'bedrooms', 'label' => 'Bedrooms', 'value' => $property->bedrooms])
        @include('shared.input', ['class' => 'col', 'name' => 'floor', 'label' => 'Floor', 'value' => $property->floor])
    </div>
    <div class="row">
        @include('shared.input', ['class' => 'col', 'name' => 'address', 'label' => 'Address', 'value' => $property->address])
        @include('shared.input', ['class' => 'col', 'name' => 'city', 'label' => 'City', 'value' => $property->city])
        @include('shared.input', ['class' => 'col', 'name' => 'postal_code', 'label' => 'Postal Code', 'value' => $property->postal_code])
    </div>
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
