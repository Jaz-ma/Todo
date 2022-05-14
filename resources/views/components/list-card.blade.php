
@props(['list'=> $list])
<ul class="flex justify-between items-center px-4 py-2 mt-4 bg-slate-900 rounded-lg">
    <li class="text-3xl text-white p-4 border-4 border-slate-700 bg-slate-800 rounded-full">1</li>
    <li class="text-white text-2xl overflow-hidden break-all px-16"> {{$list->listName}} </li>
    <li class="">
        <form method="POST" action="{{route('list.destroy',$list->listName)}}">
            @csrf
            @method('DELETE')
            <button type="submit">
                <i class="fa-solid fa-trash text-2xl text-red-500"></i>
            </button>
        </form>
    </li>
</ul>
