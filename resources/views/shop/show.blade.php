<x-layout>
    <h2  class="text-2xl">shop Data</h2>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
     type="button" onclick="location.href='{{ route('shop.edit', $shop->id) }}'">
        {{ __('update') }}
    </button>
    <form action="{{ route('shop.destroy', $shop->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
         type="submit">
            {{ __('delete') }}
        </button>
    </form>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
     type="button" onclick="history.back()">
        {{ __('back') }}
    </button>
    <table>
        @if(isset($shop))
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">Id</span>
            </td>
            <td>
                {{ $shop->id }}
            </td>
        </tr>
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">Name</span>
            </td>
            <td>
                {{ $shop->shop_name }}
            </td>
        </tr>
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">About</span>
            </td>
            <td>
                {{ $shop->about }}
            </td>
        </tr>
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">Floor</span>
            </td>
            <td>
                {{ $shop->floor_coordinate_id }}
            </td>
        </tr>
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">Longitude From</span>
            </td>
            <td>
                {{ $shop->x1_coordinate }}
            </td>
            <td class="text-right">
                <span class="px-2 py-4">To</span>
            </td>
            <td>
                {{ $shop->x2_coordinate }}
            </td>
        </tr>
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">Latitude From</span>
            </td>
            <td>
                {{ $shop->y1_coordinate }}
            </td>
            <td class="text-right">
                <span class="px-2 py-4">To</span>
            </td>
            <td>
                {{ $shop->y2_coordinate }}
            </td>
        </tr>
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">shop Flag</span>
            </td>
            <td>
                {{ $shop->x_point_coordinate }}
            </td>
            <td class="text-right">
                <span class="px-2 py-4">/ </span>
            </td>
            <td>
                {{ $shop->y_point_coordinate }}
            </td>
        </tr>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
            type="button" onclick="location.href='{{ route('shopitembind.show',$shop->shop_coordinate_id) }}'">
            {{ __('item_bind') }}
        </button>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
            type="button" onclick="location.href='{{ route('shopclassificationbind.show',$shop->shop_coordinate_id) }}'">
            {{ __('classification_bind') }}
        </button>
        @endif
    </table>
</x-layout>
