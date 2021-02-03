<x-layout>
    <h2>Shop Classification Bind Data</h2>
    <button type="button" onclick="location.href='{{ route('shopclassificationbind.edit') }}'">
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
                    <th>{{ __('CHK') }}</th>
                    <th>{{ __('Large') }}</th>
                    <th>{{ __('Middle') }}</th>
                    <th>{{ __('Small') }}</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($classifications))
                    @foreach ($classifications as $classification)
                        <tr>
                            <td>
                                <input type="checkbox" name=" chk{{ $classification->id }}">
                            </td>
                            <td>
                                {{ $classification->large_classification_name }}</a>
                            </td>
                            <td>
                                {{ $classification->middle_classification_name }}</a>
                            </td>
                            <td>
                                {{ $classification->small_classification_name }}</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-layout>
