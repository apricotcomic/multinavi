<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>floor Data</h2>
        <form action="{{ route('floor.update', $floor->id) }}" method="post">
            @csrf
            @method('PUT')
            <button type="submit" name="action" value="edit">
                {{ __('edit') }}
            </button>
            <button type="button" onclick="history.back()">
                {{ __('back') }}
            </button>
            <div>
                Id:<input type="text" name="id" value="{{ $floor->id }}"><br>
                Name:<input type="text" name="name" value="{{ $floor->floor_name }}"><br>
                Map File:<input type="text" name="file" value="{{ $floor->floor_mapfile }}"><br>
                Longitude From:<input type="text" name="x1" value="{{ $floor->x1_coordinate }}">
                To:<input type="text" name="x2" value="{{ $floor->x2_coordinate }}"><br>
                Latitude From:<input type="text" name="y1" value="{{ $floor->y1_coordinate }}">
                To:<input type="text" name="y2" value="{{ $floor->y2_coordinate }}"><br>
                Floor Height:<input type="text" name="z" value="{{ $floor->z_coordinate }}"><br>

            </div>
        </form>
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
                            <td>{{ $shop->shop_name }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </body>
</html>
