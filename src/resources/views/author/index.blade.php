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
    <tr class="table__row">
        <td>
            {{$item->getDetail()}}
        </td>
        <td>
            @if ($item->book != null)
            <table>
            @foreach ($item->book as $obj)
                <tr>
                    <td>{{$obj->getTitle()}}</td>
                </tr>
            @endforeach
            </table>
            @endif
        </td>
    </tr>
    @endforeach
</table>

@endsection