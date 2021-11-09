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
      <div class="navbar">
          <div class="container">
              <div class="logo_div">
                  <img src="/Images/logo.png" alt="" class="logo"/>
              </div>
              <div align="center" class="navbar_link">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                </ul>   
              </div>
            </div>
        </div>        
<main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 style="color:solid black;"  class="text-center font-bold text-xl">Create Task</h1>
            <form method="POST" action="/task" class="mt-10" id="usrform">
                @csrf
                <label for="fname">Name:</label>
                <input type="text" id="fname" name="name"><br><br>
                <textarea rows="4" cols="50" name="task" form="usrform">Enter task here...</textarea>
                <input type="checkbox" id="task" name="completed">
                <label for="task">Completed</label><br>   
                <button type="submit" >Create Task</button>
                <br/>
        
            </form>
        </main> 
    </section>
</body>
</html>