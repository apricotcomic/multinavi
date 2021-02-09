<x-layout>
    <h2  class="text-2xl">Landmark Index</h2>
    <div>
        <button class="w-16 h-8 bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 text-center rounded"
         type=button onclick="location.href='{{ route('landmark.create') }}'">{{ __('add') }}</button>
        <input type=button class="w-16 h-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
         value="{{ __('back') }}" onclick="history.back()">
        <br><br>
        <table class="divide-y">
            <thead>
                <tr>
                    <th>{{ __('No') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('X Coordinate Start') }}</th>
                    <th>{{ __('X Coordinate End') }}</th>
                    <th>{{ __('Y Coordinate Start') }}</th>
                    <th>{{ __('Y Coordinate End') }}</th>
                    <th>{{ __('database') }}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @if(isset($landmarks))
                    @foreach ($landmarks as $landmark)
                        <tr>
                            <td class="px-6 py-4"><a href="/landmark/{{ $landmark->landmark_coordinate_id }}">{{ $landmark->id }}</a></td>
                            <td class="px-6 py-4"><a href="/landmark/{{ $landmark->landmark_coordinate_id }}">{{ $landmark->landmark_name }}</a></td>
                            <td class="px-6 py-4">{{ $landmark->x1_coordinate }}</td>
                            <td class="px-6 py-4">{{ $landmark->x2_coordinate }}</td>
                            <td class="px-6 py-4">{{ $landmark->y1_coordinate }}</td>
                            <td class="px-6 py-4">{{ $landmark->y2_coordinate}}</td>
                            <td class="px-6 py-4">{{ $landmark->database }}</td>
                            <td class="text-blue-500 underline">
                                <button class="w-16 h-8 bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 text-center rounded"
                                type=button onclick="location.href='{{ route('floor.index', [ 'landmark_coordinate_id' => $landmark->id]) }}'">{{ __('floor') }}</button>
                            </td>
                            <td class="hidden"><input type="hidden" name="landmark_coordinate_id">{{ $landmark->landmark_coordinate_id }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-layout>

