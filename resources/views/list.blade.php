<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Post List</h1>

    @foreach ($data as $item)
        {{-- collection မို့ arrow နဲ့ဖမ်း ,လို့လဲရသလို array နဲ့လဲရ--}}
        {{-- <p> {{ $item->name}} </p> --}}

        {{-- array  --}}
        <p> {{ $item['name']}} </p>

    @endforeach
</body>
</html>
