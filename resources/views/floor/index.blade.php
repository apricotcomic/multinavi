<x-layout>
    <h2  class="text-2xl">Floor Index</h2>
    <div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
         type=button onclick="location.href='{{ route('floor.create', ['landmark_coordinate_id' => $landmark_coordinate_id]) }}'">{{ __('add') }}</button>
        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
         type=button value="{{ __('back') }}" onclick="history.back()">
        <br><br>
        <table class="devide-y">
            <thead>
                <tr>
                    <th>{{ __('No') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('X Coordinate Start') }}</th>
                    <th>{{ __('X Coordinate End') }}</th>
                    <th>{{ __('Y Coordinate Start') }}</th>
                    <th>{{ __('Y Coordinate End') }}</th>
                    <th>{{ __('Z Coordinate') }}</th>
                </tr>
            </thead>
            <tbody class="devide-y">
                @if(isset($floors))
                    @foreach ($floors as $floor)
                        <tr>
                            <td class="px-6 py-4"><a href="{{ route('floor.show', $floor->floor_coordinate_id )}}">{{ $floor->floor_coordinate_id }}</a></td>
                            <td class="px-6 py-4"><a href="{{ route('floor.show', $floor->floor_coordinate_id )}}">{{ $floor->floor_name }}</a></td>
                            <td class="px-6 py-4">{{ $floor->x1_coordinate }}</td>
                            <td class="px-6 py-4">{{ $floor->x2_coordinate }}</td>
                            <td class="px-6 py-4">{{ $floor->y1_coordinate }}</td>
                            <td class="px-6 py-4">{{ $floor->y2_coordinate}}</td>
                            <td class="px-6 py-4">{{ $floor->z_coordinate }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-layout>
