<x-layout>
    <h2  class="text-2xl">shop Data</h2>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
     type="button" onclick="location.href='{{ route('shop.edit', $shop->id) }}'">
        {{ __('update') }}
    </button>
    <form action="{{ route('shop.destroy', $shop->id) }}" method="post">
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
        @if(isset($shop))
            Id:{{ $shop->id }}<br>
            Name:{{ $shop->shop_name }}<br>
            About:{{ $shop->about }}<br>
            Floor:{{ $shop->floor_coordinate_id }}<br>
            Longitude From:{{ $shop->x1_coordinate }} To:{{ $shop->x2_coordinate }}<br>
            Latitude From:{{ $shop->y1_coordinate }} To:{{ $shop->y2_coordinate }}<br>
            shop Flag:{{ $shop->x_point_coordinate }} / {{ $shop->y_point_coordinate }}<br>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
             type="button" onclick="location.href='{{ route('shopitembind.show',$shop->shop_coordinate_id) }}'">
                {{ __('item_bind') }}
            </button>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
             type="button" onclick="location.href='{{ route('shopclassificationbind.show',$shop->shop_coordinate_id) }}'">
                {{ __('classification_bind') }}
            </button>
        @endif
    </div>
</x-layout>
