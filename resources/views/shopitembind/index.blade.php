<x-layout>
    <h2  class="text-2xl">Shop Index</h2>
    <div>
        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
         type=button value="{{ __('back') }}" onclick="history.back()">
        <br><br>
        <table>
            <thead>
                <tr>
                    <th  class="border">{{ __('No') }}</th>
                    <th  class="border">{{ __('Name') }}</th>
                    <th  class="border">{{ __('Landmark') }}</th>
                    <th  class="border">{{ __('Floor') }}</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($shops))
                    @foreach ($shops as $shop)
                        <tr>
                            <td  class="border"><a href="{{ route('shopitembind.show', $shop->shop_coordinate_id )}}">{{ $shop->shop_coordinate_id }}</a></td>
                            <td  class="border"><a href="{{ route('shopitembind.show', $shop->shop_coordinate_id )}}">{{ $shop->shop_name }}</a></td>
                            <td  class="border">{{ $shop->landmark_coordinate_id }}</td>
                            <td  class="border">{{ $shop->floor_coordinate_id }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-layout>
