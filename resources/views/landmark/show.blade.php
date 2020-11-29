<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Landmark Data</h2>
        <form action="{{ route('landmark.destroy', $landmark->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="button" onclick="location.href='{{ route('landmark.edit', $landmark->id) }}'">
                {{ __('update') }}
            </button>
            <button type="submit">
                {{ __('delete') }}
            </button>
            <button type="button" onclick="history.back()">
                {{ __('back') }}
            </button>
        </form>
        <div>
            Id:{{ $landmark->id }}<br>
            Name:{{ $landmark->landmark_name }}<br>
            Zip:{{ $landmark->zip }}<br>
            Address:{{ $landmark->address }}<br>
            Telephone:{{ $landmark->telephone_number }}<br>
            Fax:{{ $landmark->fax_number }}<br>
            Email:{{ $landmark->email }}<br>
            Longitude From:{{ $landmark->x1_coordinate }} To:{{ $landmark->x2_coordinate }}<br>
            Latitude From:{{ $landmark->y1_coordinate }} To:{{ $landmark->y2_coordinate }}<br>
            database:{{ $landmark->database }}<br>
            start date:{{ $landmark->start_date }}<br>
            end date:{{ $landmark->end_date }}<br>
        </div>

    </body>
</html>
