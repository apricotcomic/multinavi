<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>MultiNavi Floor Create</h2>
        <form action="{{ route('floor.store') }}" method="POST">
            @csrf
            <div>
                Floor Name:<input type="text" name="name"><br>
                Map File:<input type="text" name="file"><input type="button" value="file"><br>
                Longitude From:<input type="text" name="x1"> To:<input type="text" name="x2"><br>
                Latitude From:<input type="text" name="y1"> To:<input type="text" name="y2"><br>
                Floor Height:<input type="text" name="z"><br>
                StartDate:<input type="datetime" name="start_date"><br>
                EndDate:<input type="datetime" name="end_date" value="9999/12/31"><br>
            </div>
            <input type="hidden" name="landmark_coordinate_id" value="{{ $landmark_coordinate_id }}">
            <div>
                <button type="submit" name="action" value="add">{{ __('add') }}</button>
                <input type=button value="{{ __('back') }}" onclick="history.back()">
            </div>
        </form>
    </body>
</html>
