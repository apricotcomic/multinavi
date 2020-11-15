<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Shop Index</h2>
        <div>
            <button type=button onclick="location.href='{{ route('shop.create', ['landmark_coordinate_id' => $landmark_coordinate_id]) }}'">{{ __('add') }}</button>
            <input type=button value="{{ __('back') }}" onclick="history.back()">
            <br><br>
            <table>
                <thead>
                    <tr>
                        <th>{{ __('No') }}</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Landmark') }}</th>
                        <th>{{ __('Floor') }}</th>
                        <th>{{ __('About') }}</th>
                        <th>{{ __('X Coordinate Start') }}</th>
                        <th>{{ __('X Coordinate End') }}</th>
                        <th>{{ __('Y Coordinate Start') }}</th>
                        <th>{{ __('Y Coordinate End') }}</th>
                        <th>{{ __('X Point Coordinate') }}</th>
                        <th>{{ __('Y Point Coordinate') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($shops))
                        @foreach ($shops as $shop)
                            <tr>
                                <td><a href="{{ route('shop.show', $shop->shop_coordinate_id )}}">{{ $shop->shop_coordinate_id }}</a></td>
                                <td><a href="{{ route('shop.show', $shop->shop_coordinate_id )}}">{{ $shop->shop_name }}</a></td>
                                <td>{{ $shop->landmark_coordinate_id }}</td>
                                <td>{{ $shop->floor_coordinate_id }}</td>
                                <td>{{ $shop->about }}</td>
                                <td>{{ $shop->x1_coordinate }}</td>
                                <td>{{ $shop->x2_coordinate }}</td>
                                <td>{{ $shop->y1_coordinate }}</td>
                                <td>{{ $shop->y2_coordinate}}</td>
                                <td>{{ $shop->x_point_coordinate }}</td>
                                <td>{{ $shop->y_point_coordinate }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </body>
</html>
