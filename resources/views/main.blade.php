@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
<style>
    #messagelist{
        color: black;
        margin-bottom: auto;
    }
</style>
<div class="container flex justify-center w-screen h-screen">
    <div class="container flex flex-col justify-end bg-white w-2/3 h-full p-20 rounded-lg shadow-sm shadow-black">
        <div id="messagelist">
            <ul>
                <li id="messagelistli">
                </li>
            </ul>
        </div>
        <div id="messages" class="absolute bottom">
            <input type="text" name="username" id="username" placeholder="Enter your name">
            <input id="message_input" type="text" name="message" placeholder="Write a message...">
            <button type="submit" id="message_send">Send Message</button>
        </div>

    </div>
</div>
    <script src="./js/app.js"></script>
@endsection
