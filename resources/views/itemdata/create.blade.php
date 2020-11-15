<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>MultiNavi ItemData Create</h2>
        <form action="{{ route('itemdata.store') }}" method="POST">
            @csrf
            <div>
                Item Name:<input type="text" name="item_name"><br>
                Large Classification:<input type="text" name="large_classification"><br>
                Middle Classification:<input type="text" name="middle_classification"><br>
                Small Classification:<input type="text" name="small_classification"><br>
                About:<input type="text" name="about"><br>
            </div>
            <div>
                <button type="submit" name="action" value="add">{{ __('add') }}</button>
                <input type=button value="{{ __('back') }}" onclick="history.back()">
            </div>
        </form>
    </body>
</html>
