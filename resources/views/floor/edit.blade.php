<x-layout>
    <h2  class="text-2xl">floor Data</h2>
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
        <table>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Name</span>
                </td>
                <td>
                    <input class="form-input h-8 px-2" type="text" name="name" value="{{ $floor->floor_name }}">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Map File</span>
                </td>
                <td>
                    <input class="form-input h-8 w-96 px-2" type="text" name="file" value="{{ $floor->floor_mapfile }}">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Longitude From</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="x1" value="{{ $floor->x1_coordinate }}">
                </td>
                <td class=" text-right">
                    <span class="px-2 py-4">To</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="x2" value="{{ $floor->x2_coordinate }}">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Latitude From</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="y1" value="{{ $floor->y1_coordinate }}">
                </td>
                <td class=" text-right">
                    <span class="px-2 py-4">To</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="y2" value="{{ $floor->y2_coordinate }}">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Floor Height</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="z" value="{{ $floor->z_coordinate }}">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">StartDate</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="datetime" name="start_date">
                </td>
                <td class=" text-right">
                    <span class="px-2 py-4">EndDate</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="datetime" name="end_date" value="9999/12/31">
                </td>
            </tr>
        </table>
    </form>
    <table class="devide-y">
        <thead>
            <tr>
                <th>{{ __('No') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('About') }}</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($shops))
                @foreach ($shops as $shop)
                    <tr class="devide-y">
                        <td class="px-6 py-4"><a href="/shop/{{ $shop->id }}">{{ $shop->id }}</a></td>
                        <td class="px-6 py-4">{{ $shop->shop_name }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</x-layout>
