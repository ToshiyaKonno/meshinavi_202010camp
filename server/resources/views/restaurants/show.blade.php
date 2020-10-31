<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>めしナビ - 詳細画面</title>
</head>
<body>
    <table>
        <tbody>
            <tr>
                <th>店名</th>
                <td>
                    <p>{{ $restaurant->name }}</p>
                    <p>{{ $restaurant->name_kana }}</p>
                </td>
            </tr>
            <tr>
                <th>住所</th>
                <td>{{ $restaurant->address }}</td>
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
</body>
</html>
