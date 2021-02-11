<x-layout>
    <h2  class="text-2xl">shop Item Bind Data</h2>
    <form action="{{ route('shopitembind.update', $shop->id) }}" method="post">
        @csrf
        @method('PUT')
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
         type="submit" name="action" value="edit">
            {{ __('edit') }}
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
                                    <input type="checkbox" name="chk[]" value="{{ $item->id }}" {{ $checked[$item->id] }}>
                                    {{ $item->item_name }}
                                    <input type="hidden" name="item_id[]" value="{{ $item->id }}">
                                    <input type="hidden" name="checked[]" value="{{ $checked[$item->id] }}">
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </form>
</x-layout>
