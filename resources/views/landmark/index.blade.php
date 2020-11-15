<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Landmark Index</h2>
        <div>
            <button type=button onclick="location.href='{{ route('landmark.create') }}'">{{ __('add') }}</button>
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
                        <th>{{ __('database') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($landmarks))
                        @foreach ($landmarks as $landmark)
                            <tr>
                                <td><a href="/landmark/{{ $landmark->id }}">{{ $landmark->id }}</a></td>
                                <td><a href="/landmark/{{ $landmark->id }}">{{ $landmark->landmark_name }}</a></td>
                                <td>{{ $landmark->x1_coordinate }}</td>
                                <td>{{ $landmark->x2_coordinate }}</td>
                                <td>{{ $landmark->y1_coordinate }}</td>
                                <td>{{ $landmark->y2_coordinate}}</td>
                                <td>{{ $landmark->database }}</td>
                                <td><a href="{{ route('floor.index', [ 'landmark_coordinate_id' => $landmark->id]) }}">{{ __('floor') }}</a></td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </body>
</html>
