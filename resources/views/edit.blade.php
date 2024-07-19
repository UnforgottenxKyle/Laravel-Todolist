<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     @vite('resources/css/app.css')
</head>
<body>
    <main class="h-screen grid grid-rows-[300px,1fr] text-white">
        <section class="flex flex-col justify-center items-center text-center gap-5">
            <h1 class="text-5xl font-black">Edit {{$datas->todo_title}}</h1>
            <form action="/update/{{$datas->id}}" method="post">
                @method('PUT')
                @csrf
                <label for="todo_title">TODO TITLE</label><br>
                <input class="w-80 h-8 mb-5 p-3" type="text" name="todo_title" value="{{$datas->todo_title}}"><br>
                <label for="todo_task">TODO TASK</label><br>
                <input class="w-80 h-8 mb-5 p-3" type="text" name="todo_task" value="{{$datas->todo_task}}"><br>
                <input class="bg-white text-black px-10 py-2 rounded-lg cursor-pointer" type="submit" value="CREATE">
            </form>
        </section>
    </main>
</body>
</html>