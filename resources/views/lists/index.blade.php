<x-app>

<div class=" justify-center flex ">
        <div>

        <div class="bg-white-200 p-12  rounded-lg ">
            <form  method="POST" action="{{route('list.store')}}">
                @csrf
                <input type="text" name="listName" id="listName">
                <button type="submit" class="py-4 px-3 bg-blue-500 rounded-lg font-medium mt-6 text-white">Add List</button>
                @error('listName')
                <div class="text-red text-sm mt-2">
                    {{$message}}
                </div>

                @enderror
            </form>
        </div>
        <div id="dad" class="bg-white-200 p-6  rounded-lg text-center">


             @foreach ($lists as $list )

                <x-list-card :list="$list"/>
             @endforeach

        </div>
        </div>
    </div>
</x-app>
