<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>floor Data</h2>
        <button type="button" onclick="location.href='{{ route('floor.edit', $floor->id) }}'">
            {{ __('update') }}
        </button>
        <form action="{{ route('floor.destroy', $floor->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">
                {{ __('delete') }}
            </button>
        </form>
        <button type="button" onclick="history.back()">
            {{ __('back') }}
        </button>
        <div>
            Id:{{ $floor->id }}<br>
            Name:{{ $floor->floor_name }}<br>
            Map File:{{ $floor->floor_mapfile }}<br>
            Longitude From:{{ $floor->x1_coordinate }} To:{{ $floor->x2_coordinate }}
            Latitude From:{{ $floor->y1_coordinate }} To:{{ $floor->y2_coordinate }}<br>
            Floor Height:{{ $floor->z_coordinate }}<br>

        </div>
        <br><br>
        <input type="button" value="Shop Index"
            onclick="location.href='{{ route('shop.index',
                ['landmark_coordinate_id' => $floor->landmark_coordinate_id,
                'floor_coordinate_id' => $floor->floor_coordinate_id,
                ]) }}'">
        <table>
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
                        <tr>
                            <td><a href="/shop/{{ $shop->id }}">{{ $shop->id }}</a></td>
                            <td><a href="/shop/{{ $shop->id }}">{{ $shop->shop_name }}</a></td>
                            <td>{{ $shop->about }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </body>
</html>
