@extends('layouts.app')

@section('content')
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="wrapper pizza-index">
        <h1>Pizza Orders</h1>
        @foreach ($pizzas as $pizza)
        <div class="pizza-item">
            <h4>
                <img src="/img/pizza.png" alt="pizza icon">
                <a href="/pizzas/{{$pizza->id}}">{{$pizza->name}}</a>
            </h4>
        </div>
        @endforeach
    </div>

@endsection
