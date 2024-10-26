@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{asset('css/input.css')}}">
@endsection

@section('title','edit.blade.php')
    
{{-- @endsection --}}

@section('content')
<form action="/edit" method="post">
@csrf
    {{-- inputのvalue属性に値を指定することで、input欄に値を表示することができる --}}
    <table> 
        <tr>
            <th>id</th>
            <td><input type="text" name="id" value="{{$form->id}}"></td>
        </tr>
        <tr>
            <th>name</th>
            <td><input type="text" name="name" value="{{$form->name}}"></td>
        </tr>
        <tr>
            <th>age</th>
            <td><input type="text" name="age" value="{{$form->age}}"></td>
        </tr>
        <tr>
            <th>nationality</th>
            <td><input type="text" name="nationality" value="{{$form->nationality}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><button>送信</button></td>
        </tr>
    </table>
</form>

@endsection