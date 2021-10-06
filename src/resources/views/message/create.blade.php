<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel Angya</title>
    </head>
    <body>
        <form method="POST" action="/message/create">
            @csrf
            <label>メッセージ</label>
            <input type="text" name="content">
            <label>送信</label>
            <input type="submit">
        </form>
        <div>
            @foreach ($messages as $message)
            <div>
                {{ $message->content }}
            </div>
            @endforeach
        </div>

    </body>
</html>
