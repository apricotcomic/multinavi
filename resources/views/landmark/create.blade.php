<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>New Landmark</h2>
        <form action="{{ route('landmark.store') }}" method="POST">
            @csrf
            <div>
                Name:<input type="text" name="name"><br>
                Zip:<input type="text" name="zip"><br>
                Address:<input type="text" name="address"><br>
                Telephone:<input type="text" name="tel"><br>
                Fax:<input type="text" name="fax"><br>
                Email:<input type="text" name="email"><br>
                Longitude From:<input type="text" name="x1"> To:<input type="text" name="x2"><br>
                Latitude From:<input type="text" name="y1"> To:<input type="text" name="y2"><br>
                database:<input type="text" name="database"><br>
            </div>
            <div>
                <button type="submit" name="action" value="add">{{ __('add') }}</button>
                <button type="submit" name="action" value="back">{{ __('back') }}</button>
            </div>
        </form>
    </body>
</html>
