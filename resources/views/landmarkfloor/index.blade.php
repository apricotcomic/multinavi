<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Landmark Floor Index</h2>
        <div>
            <button type=button onclick="location.href='{{ route('floor.create') }}'">{{ __('add') }}</button>
            <input type=button value="{{ __('back') }}" onclick="history.back()">
            <br><br>
            <table>
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
                <tbody>
                    @if(isset($floors))
                        @foreach ($floors as $floor)
                            <tr>
                                <td><a href="/floor/{{ $floor->id }}">{{ $floor->id }}</a></td>
                                <td><a href="/floor/{{ $floor->id }}">{{ $floor->floor_name }}</a></td>
                                <td>{{ $floor->x1_coordinate }}</td>
                                <td>{{ $floor->x2_coordinate }}</td>
                                <td>{{ $floor->y1_coordinate }}</td>
                                <td>{{ $floor->y2_coordinate}}</td>
                                <td>{{ $floor->z_coordinate }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </body>
</html>
