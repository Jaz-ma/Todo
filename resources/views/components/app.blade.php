<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Todo</title>
</head>
<body class="bg-blue-200">
<nav class="flex justify-between p-6 -white mb-16 border-solid border-b-2 border-black">

    <ul class="flex items-center">
        @guest

        <li class="p-3">
            <a href="/">Home</a>
        </li>
        @endguest
      @auth

      <li class="p-3">
            <a  href="{{route('lists.index',auth()->user())}}">Task Lists</a>
        </li>
      @endauth
    </ul>
    <ul class="flex items-center">
        @auth
        <li class="p-3">
            <a href="/">{{auth()->user()->username}}</a>
        </li>
        <li class="p-3">
            <form method="POST" action="{{route('logout')}}">
            @csrf
                <button>Logout</button>
            </form>
        </li>
        @endauth

        @guest

        <li class="p-3">
            <a href="{{route('login.index')}}">Login</a>
        </li>
        <li class="p-3">
            <a href="{{route('register')}}">Register</a>
        </li>

        @endguest



    </ul>
</nav>
{{$slot}}
<x-flash-message/>

<script>
    let dad = document.getElementById('dad');

for (let i = 0; i < dad.children.length; i++) {
    dad.children[i].children[0].innerHTML=i+1;

}
</script>


</body>
</html>
