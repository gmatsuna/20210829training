@extends('layouts.app')

@section('content')

<div class="container">
    <form action="StringManipulation" method="post">
        <input type="text" name="str">
        @csrf
        </br><br>
        <button type="submit">Executar</button>
    </form>
</div>

@endsection