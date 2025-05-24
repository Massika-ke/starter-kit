<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Store</title>
</head>
<body>
    <header>
       <h1> My Store</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/products">Products</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>

    <main>
        @yield('page-content')
    </main>
</body>
</html>