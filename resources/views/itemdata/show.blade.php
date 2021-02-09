<x-layout>
    <h2  class="text-2xl">MultiNavi ItemData Show</h2>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
     type="button" onclick="location.href='{{ route('itemdata.edit', $item->id) }}'">
        {{ __('update') }}
    </button>
    <form action="{{ route('itemdata.destroy', $item->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
         type="submit">
            {{ __('delete') }}
        </button>
    </form>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
     type="button" onclick="history.back()">
        {{ __('back') }}
    </button>
    <div>
        Item Name:{{ $item->item_name }}<br>
        Large Classification:{{ $item->large_classification }}<br>
        Middle Classification:{{ $item->middle_classification }}<br>
        Small Classification:{{ $item->small_classification }}<br>
        About:{{ $item->about }}<br>
        StartDate:{{ $item->start_data }}<br>
        EndDate:{{ $item->end_data }}<br>

    </div>
</x-layout>
