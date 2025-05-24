@extends('main')

@section('page-content')

<h2>Add new product</h2>

<form method="POST" action="/products">
    @csrf

    <label for="product_name">Product name:</label>
    <input type="text" name="name" id="product_name">

    <label for="category_id">Category:</label>
    <select name="category_id" id="category_id">

        @foreach ($categories as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
        
    </select>

    <button type="submit">Add new product</button>

</form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @if (session('message'))
        {{ session('message') }}
    @endif
@endsection