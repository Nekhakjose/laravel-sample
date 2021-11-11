<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication and Task App</title>
    <link rel="stylesheet" href="/trial.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/login">Login</a>
                    </li>
                    <li>
                        <a href="#">Register</a>
                    </li>
                </ul>   
              </div>
            </div>
        </div>        
        <main class="max-w-lg mx-auto mt-10 bg-gray-200 border border-gray-100 p-6 rounded-xl">
            <h1 style="color:black;" class="text-center font-bold text-xl">Register</h1>
            <form method="POST" action="/register" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="name"
                    >
                        Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="name"
                           id="name"
                           required
                    >
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password"
                    >
                        Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password"
                           id="password"
                           required
                    >
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password1"
                    >
                        Confirm Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password1"
                           id="password1"
                           required
                    >
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"
                    >
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           required
                    >
                </div>

                <div class="mb-6">
                    <button style="background-color:blue;color:white"
                    type="submit">
                        Register
                    </button>
                </div>
                <a href="/login">Already a user!Login here.</a>
            </form>
        </main> 
    </section>
</body>
</html>