<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>MultiNavi ItemData Edit</h2>
        <form action="{{ route('itemdata.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit" name="action" value="edit">
                {{ __('edit') }}
            </button>
            <button type="button" onclick="history.back()">
                {{ __('back') }}
            </button>
            <div>
                Item Name:<input type="text" name="item_name" value="{{ $item->item_name }}"><br>
                Large Classification:<input type="text" name="large_classification" value="{{ $item->large_classification }}"><br>
                Middle Classification:<input type="text" name="middle_classification" value="{{ $item->middle_classification }}"><br>
                Small Classification:<input type="text" name="small_classification" value="{{ $item->small_classification }}"><br>
                About:<input type="text" name="about" value="{{ $item->about }}"><br>
            </div>
        </form>
    </body>
</html>
