@extends('main')

@section('page-content')
    <h1>Products</h1>

    @if ($category)
        <p>Filtering by category:
            <strong>{{ $category }}</strong>
            </p>

        @if ($products)
            <ul>
                @foreach ($products as $product)
                    <li>
                        {{ $product->name }}
                    </li>
                @endforeach
            </ul>
        @else
        <P>No Products Found!</P>
        @endif
    @endif

    <p>Choose Category:</p>
    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="/Products/{{ $category->name }}">{{ $category->name }}</a>
            </li>
        
        @endforeach
    </ul>
<a href="Home">Home</a>

@endsection