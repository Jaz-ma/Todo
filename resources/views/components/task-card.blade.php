@props(['task'=> $task])
<ul class="flex justify-between items-center px-8 py-12 mt-16 bg-white rounded-lg">
    <li class="text-3xl text-blue-500 p-4 border-4 border-blue-500 rounded-full">1</li>
    <li class="text-2xl overflow-hidden break-all px-16"> {{$task->taskName}} </li>
    <li>
        <a href="">
        <i class="fa-solid fa-trash text-2xl text-red-500"></i>
        </a>
    </li>
</ul>
