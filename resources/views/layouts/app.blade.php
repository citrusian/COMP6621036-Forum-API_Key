<!DOCTYPEhtml>
<html>
<head>
    <title>@yield('title')</title>
    <script src="{{ asset('node_modules/angular/angular.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
</head>
<body ng-app="myApp">

<header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
</header>

<main>
    <div class="container">
        @yield('content')
    </div>
</main>

</body>
</html>
