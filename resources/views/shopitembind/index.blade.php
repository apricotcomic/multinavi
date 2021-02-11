<x-layout>
    <h2  class="text-2xl">Shop Index</h2>
    <div>
        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
         type=button value="{{ __('back') }}" onclick="history.back()">
        <br><br>
        <table class="divide-y">
            <thead>
                <tr>
                    <th>{{ __('No') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Landmark') }}</th>
                    <th>{{ __('Floor') }}</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @if(isset($shops))
                    @foreach ($shops as $shop)
                        <tr>
                            <td><a href="{{ route('shopitembind.show', $shop->shop_coordinate_id )}}">{{ $shop->shop_coordinate_id }}</a></td>
                            <td><a href="{{ route('shopitembind.show', $shop->shop_coordinate_id )}}">{{ $shop->shop_name }}</a></td>
                            <td>{{ $shop->landmark_coordinate_id }}</td>
                            <td>{{ $shop->floor_coordinate_id }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-layout>
