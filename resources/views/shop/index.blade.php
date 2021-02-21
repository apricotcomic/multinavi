<x-layout>
    <h2  class="text-2xl">Shop Index</h2>
    <div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
         type=button onclick="location.href='{{ route('shop.create') }}'">{{ __('add') }}</button>
        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
         type=button value="{{ __('back') }}" onclick="history.back()">
        <br><br>
        <table class="divide-y">
            <thead>
                <tr>
                    <th>{{ __('No') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Floor') }}</th>
                    <th>{{ __('About') }}</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @if(isset($shops))
                    @foreach ($shops as $shop)
                        <tr>
                            <th><a href="{{ route('shop.show', $shop->shop_coordinate_id )}}">{{ $shop->shop_coordinate_id }}</a></td>
                            <th><a href="{{ route('shop.show', $shop->shop_coordinate_id )}}">{{ $shop->shop_name }}</a></td>
                            <th>{{ $shop->floor_coordinate_id }}</td>
                            <th>{{ $shop->about }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-layout>
