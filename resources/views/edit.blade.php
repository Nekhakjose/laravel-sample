<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication and Task App</title>
    <link rel="stylesheet" href="/trial.css">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
</head>
<body>
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.png" alt="logo.png">
                </a>
            </div>
            <div class="mt-8 md:mt-0 flex items-center">
            <a href="/" class="text-xs font-bold uppercase">Home Page</a>
            <div class="mt-8 md:mt-0 flex items-center">
             @auth
                <span class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}!</span>

                <form method="POST" action="/logout" class="text-xs font-semibold text-blue-500 ml-6">
                    @csrf

                    <button type="submit">Log Out</button>
                </form>
             @else
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                <a href="/login" class="ml-6 text-xs font-bold uppercase">Log In</a>
            @endauth
        </div>  
        </div>
    </nav>   
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        <h1 style="color:solid black;"  class="text-center font-bold text-xl">Edit Task</h1>
        <form method="POST" action="/edit" class="mt-10" id="usrform">
            @csrf
            <label for="fname">Name:</label>
            <input type="text" id="fname" name="name"><br><br>
            <textarea rows="4" cols="50" name="task" form="usrform">Enter task here...</textarea>
            <input type="checkbox" id="task" name="completed">
            <label for="task">Completed</label><br>   
            <button type="submit" >UPDATE</button>
            <a href="/task"></a>
        </form>
    </main> 
</section>
</body>
</html>
