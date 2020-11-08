<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Landmark Index</h2>
        <div>
            <input type=button value="{{ __('back') }}" onclick="history.back()">
            <br><br>
            <table>
                <thead>
                    <tr>
                        <th>{{ __('No') }}</th>
                        <th>{{ __('X Coordinate Start') }}</th>
                        <th>{{ __('X Coordinate End') }}</th>
                        <th>{{ __('Y Coordinate Start') }}</th>
                        <th>{{ __('Y Coordinate End') }}</th>
                        <th>{{ __('database') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($landmarks))
                        @foreach ($landmarks as $landmark)
                            <tr>
                                <td>{{ $landmark->id }}</td>
                                <td>{{ $landmark->x1_coordinate }}</td>
                                <td>{{ $landmark->x2_coordinate }}</td>
                                <td>{{ $landmark->y1_coordinate }}</td>
                                <td>{{ $landmark->y2_coordinate}}</td>
                                <td>{{ $landmark->database }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </body>
</html>
