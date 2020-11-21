<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>shop Item Bind Data</h2>
        <button type="button" onclick="location.href='{{ route('shopitembind.edit', $shop->id) }}'">
            {{ __('Edit') }}
        </button>
        <button type="button" onclick="history.back()">
            {{ __('back') }}
        </button>
        <div>
            @if(isset($shop))
                Id:{{ $shop->id }}<br>
                Floor:{{ $shop->floor_coordinate_id }}<br>
                Name:{{ $shop->shop_name }}<br>
                About:{{ $shop->about }}<br>
            @endif
            <table>
                <thead>
                    <tr>
                        <th>{{ __('Name') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($items))
                        @foreach ($items as $item)
                            <tr>
                                <td>
                                    <input type="checkbox" name=" chk{{ $item->id }}">
                                    {{ $item->item_name }}</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </body>
</html>
