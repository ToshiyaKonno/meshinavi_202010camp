@extends('layouts.app')
{{-- app.baladeから継承 --}}
@section('title', '詳細画面')

@section('content')
@include('layouts.restaurant', compact('restaurant'))
            <table class="table-bordered mb-5 mt-3">
            <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
        <tbody>
            <tr>
                <th>店名</th><p> {{ $restaurant->recommend  }} 
                <td>
                    
                    <p>{{ $restaurant->name }}</p>
                    <p>{{ $restaurant->name_kana }}</p>
                </td>
            </tr>
            <tr>
                <th>住所</th>
                <td>{{ $restaurant->address }}</td>
            </tr>
                <th>カテゴリー</th>
                <td>{{ $restaurant->category->name }}</td>
            </tr>
            <tr>
                <th>営業時間</th>
                <td>{{ $restaurant->opentime }}</td>
            </tr>
            <tr>
                <th>定休日</th>
                <td>{{ $restaurant->holiday }}</td>
            </tr>
            <tr>
                <th>その他</th>
                <td>{{ $restaurant->note }}</td>
            </tr>
        </tbody>
    </table>
    {{-- actionタグは関係なくルーティング出来る --}}
    <a href="{{ action('RestaurantController@index') }}">戻る</a>   


@endsection