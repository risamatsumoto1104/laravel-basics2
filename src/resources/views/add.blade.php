@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{asset('css/input.css')}}">
@endsection

@section('title','add.blade.php')
    
{{-- @endsection --}}

@section('content')
<form action="/add" method="post">
@csrf
    <table>
        <tr>
            <th>name</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>age</th>
            <td><input type="text" name="age"></td>
        </tr>
        <tr>
            <th>nationality</th>
            <td><input type="text" name="nationality"></td>
        </tr>
        <tr>
            <th></th>
            <td><button>送信</button></td>
        </tr>
    </table>
</form>

@endsection