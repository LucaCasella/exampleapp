<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Example
    </title>
    @vite(['resources/js/app.js'])
    <meta name="viewport" content="width=device-width">
</head>
<body>
<div>
    @foreach($pictures as $picture)
        <img src="data:image/jpeg;base64,{{$picture}}"/>
    @endforeach
</div>
</body>
</html>
