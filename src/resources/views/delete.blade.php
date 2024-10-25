@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{asset('css/input.css')}}">
@endsection

@section('title','delete.blade.php')
    
{{-- @endsection --}}

@section('content')
<table> 
    <tr>
        <th>id</th>
        <td>{{$author->id}}</td>
    </tr>
    <tr>
        <th>name</th>
        <td>{{$author->name}}</td>
    </tr>
    <tr>
        <th>age</th>
        <td>{{$author->age}}</td>    
    </tr>    
    <tr>  
        <th>nationality</th>  
        <td>{{$author->nationality}}</td>    
    </tr>    
    <tr>    
        <th></th>    
        <td>
            {{-- 「/delete」とするとフォーム内に送信するデータがない為、削除対象のidをコントローラに渡せない。今回は削除対象のidをクエリパラメータに指定し、リクエストに含めるようにする --}}
            <form action="/delete?id={{$author->id}}" method="post">
            @csrf
                <button>送信</button>
            </form>
        </td>    
    </tr>
    </table>
</form>

@endsection