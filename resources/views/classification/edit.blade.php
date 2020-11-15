<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>MultiNavi Classification Edit</h2>
        <form action="{{ route('classification.update', $classification->id) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit" name="action" value="edit">
                {{ __('edit') }}
            </button>
            <button type="submit" name="action" value="back">
                {{ __('back') }}
            </button>
            <div>
                Large Classification:<input type="text" name="large_classification" value="{{ $classification->large_classification }}"><br>
                Name:<input type="text" name="large_classification_name" value="{{ $classification->large_classification_name }}"><br>
                Middle Classification:<input type="text" name="middle_classification" value="{{ $classification->middle_classification }}"><br>
                Name:<input type="text" name="middle_classification_name" value="{{ $classification->middle_classification_name }}"><br>
                Small Classification:<input type="text" name="small_classification" value="{{ $classification->small_classification }}"><br>
                Name:<input type="text" name="small_classification_name" value="{{ $classification->small_classification_name }}"><br>
            </div>
        </form>
    </body>
</html>
