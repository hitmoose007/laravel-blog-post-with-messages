<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel chat</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--- Font Awesome -->
    <!-- link javascript -->
    
    <link rel="shortcut icon" href="#">
</head>

<body>

    <div class="app flex justify-center  bg-cyan-400 flex-col">
        <header class="mb-4">
            <h1 class="  p-6 text-center text-6xl bg-lime-300 rounded-lg mb-5"> Let's talk</h1>
            <input type="text" name="username" id="username" placeholder="Enter your name"
                class="border-8 border-yellow-500 rounded-full py-2 px-4">
        </header>

    </div>
    <div id="messages" class="absolute bottom">
        


            <input id="message_input" type="text" name="message" placeholder="Write a message..."
                class="w-11/12 border-4 border-blue-400 rounded-md p-4">
            <button type="submit" id="message_send"
                class="bg-yellow-300 border-2 border-red-600 rounded-full p-4 m-5 hover:bg-red-300">Send Message</button>
        
        </input>
    </div>


    <script src= "./js/app.js" ></script>
</body>

</html>
