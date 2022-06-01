<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web project</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    body{
        background-image: url("https://img.freepik.com/free-photo/grey-black-texture-concrete_125540-775.jpg?t=st=1654068270~exp=1654068870~hmac=bd635ee012d59d1a8d91615971e9ca9412484184b897c863fb3a24aa840d26fc&w=996");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body class="bg-gray-400">

    <nav class="p-6 bg-gray-900 flex justify-between mb-6 text-white">

        <ul class="flex items-center">
            @auth
            <li>
                <a href="/dashboard" class="p-3">Dashboard</a>
            </li>
            <li>
                <a href ="{{ route('posts') }}" class="p-3">Post</a>
            </li>
            @endauth
        </ul>

        <ul class="flex items-center">
            @auth
                <li>
                    <a href="" class="p-3">{{ auth()->user()->name }}</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="post" class="inline">
                        @csrf
                        <button type="submit">Logout</a>
                    </form>
                </li>


            @endauth

            @guest


                <li>
                    <a href="{{ route('login') }}" class="p-3">Login</a>
                </li>

                <li>
                    <a href="{{ route('register') }}" class="p-3">Register</a>
                </li>


            @endguest
        </ul>
    </nav>



    @yield('content')

</body>

</html>
