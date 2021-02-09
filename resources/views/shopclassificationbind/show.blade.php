<x-layout>
    <h2  class="text-2xl">Shop Classification Bind Data</h2>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
     type="button" onclick="location.href='{{ route('shopclassificationbind.edit') }}'">
        {{ __('Edit') }}
    </button>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
     type="button" onclick="history.back()">
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
                    <th  class="border">{{ __('CHK') }}</th>
                    <th  class="border">{{ __('Large') }}</th>
                    <th  class="border">{{ __('Middle') }}</th>
                    <th  class="border">{{ __('Small') }}</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($classifications))
                    @foreach ($classifications as $classification)
                        <tr>
                            <td  class="border">
                                <input type="checkbox" name=" chk{{ $classification->id }}">
                            </td>
                            <td  class="border">
                                {{ $classification->large_classification_name }}</a>
                            </td>
                            <td  class="border">
                                {{ $classification->middle_classification_name }}</a>
                            </td>
                            <td  class="border">
                                {{ $classification->small_classification_name }}</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-layout>
