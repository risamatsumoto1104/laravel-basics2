@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{asset('css/input.css')}}">
@endsection

@section('title','add.blade.php')
    
{{-- @endsection --}}

@section('content')
@if (@session('message'))
<p>入力に問題があります</p>
@endif
<form action="/add" method="post">
@csrf
    <table>
        @error('name')
        <tr>
            <th style="background-color:red">ERROR</th>
            <td>{{$errors->first('name')}}</td>
        </tr>
        @enderror
        <tr>
            <th>name</th>
            <td><input type="text" name="name"></td>
        </tr>
        @error('name')
        <tr>
            <th style="background-color:red">ERROR</th>
            <td>{{$errors->first('age')}}</td>
        </tr>
        @enderror
        <tr>
            <th>age</th>
            <td><input type="text" name="age"></td>
        </tr>
        @error('name')
        <tr>
            <th style="background-color:red">ERROR</th>
            <td>{{$errors->first('nationality')}}</td>
        </tr>
        @enderror
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