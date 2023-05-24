@extends('layouts.app')

@section('title', 'Home')

@section('content')
{{--    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>--}}
    <h1>Welcome to my AngularJS app!</h1>
    <div ng-controller="myController">
    <p>@{{ message }}</p>
    </div>

    <script>
        var app=angular.module('myApp', []);
        app.controller('myController', function($scope) {
            $scope.message="Hello, AngularJS!";
        });
    </script>
@endsection

@section('scripts')
{{--    <script>--}}
{{--        var app=angular.module('myApp', []);--}}
{{--        app.controller('myController', function($scope) {--}}
{{--            $scope.message="Hello, AngularJS!";--}}
{{--        });--}}
{{--    </script>--}}
@endsection
