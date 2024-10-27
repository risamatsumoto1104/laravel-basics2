@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{asset('css/input.css')}}">
@endsection

@section('title','book.add.blade.php')
    
{{-- @endsection --}}

@section('content')
@if (count($errors) > 0)
<ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form action="/book/add" method="post">
@csrf
    <table>
        <tr>
            <th>author_id:</th>
            <td><input type="id" name="author_id"></td>
        </tr>
        <tr>
            <th>titile:</th>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <th></th>
            <td><button>送信</button></td>
        </tr>
    </table>
</form>

@endsection