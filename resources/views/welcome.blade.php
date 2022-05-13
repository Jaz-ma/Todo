<x-app>


    <div class="w-full justify-center flex">

        <div class="bg-white-200 p-6 w-8/12 rounded-lg text-center">

            <h1 class="text-4xl mb-8">Welcome to the tasks list app</h1>
            @guest
            <p>Please <a class="text-blue-500" href="{{route('login.index')}}">log in</a> to you account to start making your tasks lists</p>
            <p>Don't have an account? <a class="text-blue-500" href="{{route('register')}}">register</a> here</p>
            @endguest


        </div>
    </div>
</x-app>
