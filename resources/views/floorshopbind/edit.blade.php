<x-layout>
    <h2  class="text-2xl">floor Shop Bind</h2>
    <form action="{{ route('floor.update', $floor->id) }}" method="post">
        @csrf
        @method('PUT')
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
         type="submit" name="action" value="edit">
            {{ __('edit') }}
        </button>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
         type="button" onclick="history.back()">
            {{ __('back') }}
        </button>
        <div class="w-max h-auto">
            <img src="{{ asset('storage/' . $floor->landmark_coordinate_id . '/floor/' . $floor->floor_mapfile) }}" >
        </div>
    </form>
    <mapflag-component></mapflag-component>

</x-layout>
