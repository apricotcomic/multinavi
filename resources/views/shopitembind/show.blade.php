<x-layout>
    <h2  class="text-2xl">shop Item Bind Data</h2>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
     type="button" onclick="location.href='{{ route('shopitembind.edit', $shop->id) }}'">
        {{ __('Edit') }}
    </button>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
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
        <table class="divide-y">
            <thead>
                <tr>
                    <th>{{ __('Name') }}</th>
                </tr>
            </thead>
            <tbody class="divide-y">
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
</x-layout>
