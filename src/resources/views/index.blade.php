@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('title','index.blade.php')
    
{{-- @endsection --}}

@section('content')
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>nationality</th>
    </tr>
    @foreach ($authors as $author)
    <tr>
        <td>{{$author->id}}</td>
        <td>{{$author->name}}</td>
        <td>{{$author->age}}</td>
        <td>{{$author->nationality}}</td>
    </tr>
    @endforeach
</table>

@endsection