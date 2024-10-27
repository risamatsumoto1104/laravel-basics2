@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('title','book.index.blade.php')
    
{{-- @endsection --}}

@section('content')
<table>
    <tr>
        <th>Books</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->getTitle()}}</td>
    </tr>
    @endforeach
</table>

@endsection