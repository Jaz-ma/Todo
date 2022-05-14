<x-app>

    <div class=" justify-center flex ">
        <div>

        <div class="bg-white-200 p-12  rounded-lg ">
            <form  method="POST" action="{{route('tasks.store')}}">
                @csrf
                <textarea name="taskName" id="task" cols="30" rows="5" class="bg-ray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Post something!"></textarea>
                <button type="submit" class="py-4 px-3 bg-blue-500 rounded-lg font-medium mt-6 text-white">Add Task</button>
                @error('taskName')
                <div class="text-red text-sm mt-2">
                    {{$message}}
                </div>

                @enderror
            </form>
        </div>
        <div id='dad' class="bg-white-200 p-6  rounded-lg text-center">


             @foreach ($tasks as $task )
                <x-task-card :task="$task"/>
             @endforeach

        </div>
        </div>
    </div>

</x-app>
