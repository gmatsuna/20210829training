@extends('layouts.app')

@section('content')

<div class="container">
    <form action="WhileLoop" method="post">
        <input type="number" name="initVal">
        @csrf
        </br><br>
        <button type="submit">Sacar</button>
    </form>
</div>

@endsection