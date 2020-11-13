<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>floor Data</h2>
        <form action="{{ route('floor.destroy', $floor->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="button" onclick="location.href='{{ route('floor.edit', $floor->id) }}'">
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
            Id:{{ $floor->id }}<br>
            Name:{{ $floor->floor_name }}<br>
            Map File:{{ $floor->floor_mapfile }}<br>
        </div>
        <table>
            <thead>
                <tr>
                    <th>{{ __('No') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('About') }}</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($shops))
                    @foreach ($shops as $shop)
                        <tr>
                            <td><a href="/shop/{{ $shop->id }}">{{ $shop->id }}</a></td>
                            <td>{{ $shop->shop_name }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </body>
</html>
