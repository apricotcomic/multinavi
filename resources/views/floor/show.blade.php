<x-layout>
    <h2  class="text-2xl">floor Data</h2>
    <button class="w-20 h-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
     type="button" onclick="location.href='{{ route('floor.edit', $floor->id) }}'">
        {{ __('update') }}
    </button>
    <form action="{{ route('floor.destroy', $floor->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="w-20 h-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded" type="submit">
            {{ __('delete') }}
        </button>
    </form>
    <button class="w-16 h-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
     type="button" onclick="history.back()">
        {{ __('back') }}
    </button>
    <table>
        <tr>
            <td class=" text-right">
                <span class="px-2 py-4">Id</span>
            </td>
            <td>
                {{ $floor->id }}
            </td>
        </tr>
        <tr>
            <td class=" text-right">
                <span class="px-2 py-4">Name</span>
            </td>
            <td>
                {{ $floor->floor_name }}
            </td>
        </tr>
        <tr>
            <td class=" text-right">
                <span class="px-2 py-4">Map File</span>
            </td>
            <td>
                {{ $floor->floor_mapfile }}
            </td>
        </tr>
        <tr>
            <td>
                <span class="px-2 py-4">Longitude From</span>
            </td>
            <td>
                {{ $floor->x1_coordinate }}
            </td>
            <td>
                <span class="px-2 py-4">To</span>
            </td>
            <td>
                {{ $floor->x2_coordinate }}
            </td>
        </tr>
        <tr>
            <td>
                <span class="px-2 py-4">Latitude From</span>
            </td>
            <td>
                {{ $floor->y1_coordinate }}
            </td>
            <td>
                <span class="px-2 py-4">To</span>
            </td>
            <td>
                {{ $floor->y2_coordinate }}
            </td>
        </tr>
        <tr>
            <td>
                <span class="px-2 py-4">Floor Height</span>
            </td>
            <td>
                {{ $floor->z_coordinate }}
            </td>
        </tr>
        <tr>
            <td>
                <span class="px-2 py-4">start date</span>
            </td>
            <td>
                {{ $floor->start_date }}
            </td>
        </tr>
        <tr>
            <td>
                <span class="px-2 py-4">end date</span>
            </td>
            <td>
                {{ $floor->end_date }}
            </td>
        </tr>
    </table>
    <br><br>
    <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
     type="button" value="Shop Index"
        onclick="location.href='{{ route('shop.index',
            ['landmark_coordinate_id' => $floor->landmark_coordinate_id,
            'floor_coordinate_id' => $floor->floor_coordinate_id,
            ]) }}'">
    <table class="devide-y">
        <thead>
            <tr>
                <th>{{ __('No') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('About') }}</th>
            </tr>
        </thead>
        <tbody class="devide-y">
            @if(isset($shops))
                @foreach ($shops as $shop)
                    <tr>
                        <td class="px-6 py-4"><a href="/shop/{{ $shop->id }}">{{ $shop->id }}</a></td>
                        <td class="px-6 py-4"><a href="/shop/{{ $shop->id }}">{{ $shop->shop_name }}</a></td>
                        <td class="px-6 py-4">{{ $shop->about }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</x-layout>
