<x-layout>
    <h2  class="text-2xl">Shop Index</h2>
    <div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
         type=button onclick="location.href='{{ route('shop.create', ['landmark_coordinate_id' => $landmark_coordinate_id]) }}'">{{ __('add') }}</button>
        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
         type=button value="{{ __('back') }}" onclick="history.back()">
        <br><br>
        <table>
            <thead>
                <tr>
                    <th  class="border">{{ __('No') }}</th>
                    <th  class="border">{{ __('Name') }}</th>
                    <th  class="border">{{ __('Landmark') }}</th>
                    <th  class="border">{{ __('Floor') }}</th>
                    <th  class="border">{{ __('About') }}</th>
                    <th  class="border">{{ __('X Coordinate Start') }}</th>
                    <th  class="border">{{ __('X Coordinate End') }}</th>
                    <th  class="border">{{ __('Y Coordinate Start') }}</th>
                    <th  class="border">{{ __('Y Coordinate End') }}</th>
                    <th  class="border">{{ __('X Point Coordinate') }}</th>
                    <th  class="border">{{ __('Y Point Coordinate') }}</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($shops))
                    @foreach ($shops as $shop)
                        <tr>
                            <td  class="border"><a href="{{ route('shop.show', $shop->shop_coordinate_id )}}">{{ $shop->shop_coordinate_id }}</a></td>
                            <td  class="border"><a href="{{ route('shop.show', $shop->shop_coordinate_id )}}">{{ $shop->shop_name }}</a></td>
                            <td  class="border">{{ $shop->landmark_coordinate_id }}</td>
                            <td  class="border">{{ $shop->floor_coordinate_id }}</td>
                            <td  class="border">{{ $shop->about }}</td>
                            <td  class="border">{{ $shop->x1_coordinate }}</td>
                            <td  class="border">{{ $shop->x2_coordinate }}</td>
                            <td  class="border">{{ $shop->y1_coordinate }}</td>
                            <td  class="border">{{ $shop->y2_coordinate}}</td>
                            <td  class="border">{{ $shop->x_point_coordinate }}</td>
                            <td  class="border">{{ $shop->y_point_coordinate }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-layout>
