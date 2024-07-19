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
            <h1 class="text-5xl font-black">ADD NEW USER</h1>
            <form action="/add/todo" method="post">
                @csrf
                <label for="todo_title">TODO TITLE</label><br>
                <input class="w-80 h-8 mb-5 p-3" type="text" name="todo_title"><br>
                <label for="todo_task">TODO TASK</label><br>
                <input class="w-80 h-8 mb-5 p-3" type="text" name="todo_task"><br>
                <input class="bg-white text-black px-10 py-2 rounded-lg cursor-pointer" type="submit" value="CREATE">
            </form>
        </section>
        <section class="grid grid-cols-[1fr,600px,1fr] items-start justify-center text-center">
            <table class="col-start-2 col-end-3 text-center">
                <tr class="text-xl">
                    <th>Title</th>
                    <th>Description</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($todos as $todo)
                    <tr>
                        <td class="ml-20">{{$todo->todo_title}}</td>
                        <td class="ml-20">{{$todo->todo_task}}</td>
                        <td class="flex ml-20">
                            <form action="/edit/{{$todo->id}}" method="post">
                                @csrf
                                <input class="bg-green-800 px-6 py-1 rounded-lg mr-2 cursor-pointer" type="submit" value="Update">
                            </form>
                            <form action="/delete/{{$todo->id}}" method="post">
                                @method('DELETE')
                                @csrf
                                <input class="bg-red-800 px-6 py-1 rounded-lg cursor-pointer" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </section>
    </main>
</body>
</html>