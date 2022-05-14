@props(['task'=> $task])
<ul class="flex justify-between items-center px-8 py-2 mt-4 bg-white rounded-lg">
    <li class="text-3xl text-blue-500 p-4 border-4 border-blue-500 rounded-full"></li>
    <li class="text-2xl overflow-hidden break-all px-16"> {{$task->taskName}} </li>
    <li>
        <form method="POST" action="{{route('tasks.destroy',$task->id)}}">
            @csrf
            @method('DELETE')
            <button type="submit">

                <i class="fa-solid fa-trash text-2xl text-red-500"></i>
            </button>
        </form>
    </li>
</ul>
