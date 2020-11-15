<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>MultiNavi Classification Show</h2>
        <button type="button" onclick="location.href='{{ route('classification.edit', $classification->id) }}'">
            {{ __('update') }}
        </button>
        <form action="{{ route('classification.destroy', $classification->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">
                {{ __('delete') }}
            </button>
        </form>
        <button type="button" onclick="history.back()">
            {{ __('back') }}
        </button>
        <div>
            Large Classification:{{ $classification->large_classification }}<br>
            Name:{{ $classification->large_classification_name }}<br>
            Middle Classification:{{ $classification->middle_classification }}<br>
            Name:{{ $classification->middle_classification_name }}<br>
            Small Classification:{{ $classification->small_classification }}<br>
            Name:{{ $classification->small_classification_name }}<br>
        </div>
    </body>
</html>
