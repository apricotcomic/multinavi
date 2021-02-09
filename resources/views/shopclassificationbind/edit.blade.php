<x-layout>
    <h2  class="text-2xl">shop Item Bind Data</h2>
    <form action="{{ route('shopclassificationbind.update') }}" method="post">
        @csrf
        @method('PUT')
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
         type="submit" name="action" value="update">
            {{ __('update') }}
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
                        <th  class="border">{{ __('Name') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($classifications))
                        @foreach ($classifications as $classification)
                            <tr>
                                <td  class="border">
                                    <input type="checkbox" name="chk[]" value="{{ $classification->id }}" {{ $checked[$classification->id] }}>
                                    <input type="hidden" name="classification_id[]" value="{{ $classification->id }}">
                                </td>
                                <td  class="border">
                                    {{ $classification->middle_classification_name }}
                                </td>
                                <td  class="border">
                                    {{ $classification->small_classification_name }}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </form>
</x-layout>
