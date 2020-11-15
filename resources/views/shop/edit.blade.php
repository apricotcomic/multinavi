<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>shop Edit</h2>
        <form action="{{ route('shop.update', $shop->id) }}" method="post">
            @csrf
            @method('PUT')
            <button type="submit" name="action" value="edit">
                {{ __('edit') }}
            </button>
            <button type="button" onclick="history.back()">
                {{ __('back') }}
            </button>
            <div>
                @if(isset($shop))
                    Id:{{ $shop->id }}<br>
                    Name:<input type="text" name="name" value="{{ $shop->shop_name }}"><br>
                    About:<input type="text" name="about" value="{{ $shop->about }}"><br>
                    Floor:<input type="text" name="floor" value="{{ $shop->floor_coordinate_id }}"><br>
                    Longitude From:<input type="text" name="x1" value="{{ $shop->x1_coordinate }}">
                    To:<input type="text" name="x2" value="{{ $shop->x2_coordinate }}"><br>
                    Latitude From:<input type="text" name="y1" value="{{ $shop->y1_coordinate }}">
                    To:<input type="text" name="y2" value="{{ $shop->y2_coordinate }}"><br>
                    shop Flag:<input type="text" name="x_point" value="{{ $shop->x_point_coordinate }}">
                    / <input type="text" name="y_point" value="{{ $shop->y_point_coordinate }}"><br>
                @endif
            </div>
        </form>
    </body>
</html>
