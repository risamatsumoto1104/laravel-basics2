@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('title','author.index.blade.php')
    
{{-- @endsection --}}

@section('content')
<table>
    <tr>
        <th>Author</th>
        <th>Book</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>
            {{$item->getDetail()}}
        </td>
        <td>
            @if ($item->book != null)
            {{$item->book->getTitle()}}
            @endif
        </td>
    </tr>
    @endforeach
</table>

@endsection