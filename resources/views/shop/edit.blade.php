<x-layout>
    <h2  class="text-2xl">shop Edit</h2>
    <form action="{{ route('shop.update', $shop->id) }}" method="post">
        @csrf
        @method('PUT')
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
         type="submit" name="action" value="edit">
            {{ __('edit') }}
        </button>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
         type="button" onclick="location.href='{{ route('shop.show'v$shop->id) }}'">
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
                    <input type="text" name="name" value="{{ $shop->shop_name }}">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">About</span>
                </td>
                <td>
                    <input type="text" name="about" value="{{ $shop->about }}">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">Floor</span>
                </td>
                <td>
                    <input type="text" name="floor" value="{{ $shop->floor_coordinate_id }}">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">Longitude From</span>
                </td>
                <td>
                    <input type="text" name="x1" value="{{ $shop->x1_coordinate }}">
                </td>
                <td class="text-right">
                    <span class="px-2 py-4">To</span>
                </td>
                <td>
                    <input type="text" name="x2" value="{{ $shop->x2_coordinate }}">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">Latitude From</span>
                </td>
                <td>
                    <input type="text" name="y1" value="{{ $shop->y1_coordinate }}">
                </td>
                <td class="text-right">
                    <span class="px-2 py-4">To</span>
                </td>
                <td>
                    <input type="text" name="y2" value="{{ $shop->y2_coordinate }}">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">shop Flag</span>
                </td>
                <td>
                    <input type="text" name="x_point" value="{{ $shop->x_point_coordinate }}">
                </td>
                <td class="text-right">
                    <span class="px-2 py-4">/ </span>
                </td>
                <td>
                    <input type="text" name="y_point" value="{{ $shop->y_point_coordinate }}">
                </td>
            </tr>
            @endif
        </table>
    </form>
</x-layout>
