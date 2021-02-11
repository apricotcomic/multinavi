<x-layout>
    <h2  class="text-2xl">ItemData Index</h2>
    <div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
         type=button onclick="location.href='{{ route('itemdata.create') }}'">{{ __('add') }}</button>
        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
         type=button value="{{ __('back') }}" onclick="history.back()">
        <br><br>
        <table class="devide-y">
            <thead>
                <tr>
                    <th>{{ __('No') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Large Classification') }}</th>
                    <th>{{ __('Middle Classification') }}</th>
                    <th>{{ __('Small Classification') }}</th>
                    <th>{{ __('About') }}</th>
                </tr>
            </thead>
            <tbody class="devide-y">
                @if(isset($items))
                    @foreach ($items as $item)
                        <tr>
                            <td class="px-6 py-4"><a href="{{ route('itemdata.show', $item->id )}}">{{ $item->id }}</a></td>
                            <td class="px-6 py-4"><a href="{{ route('itemdata.show', $item->id )}}">{{ $item->item_name }}</a></td>
                            <td class="px-6 py-4">{{ $item->large_classification }}</td>
                            <td class="px-6 py-4">{{ $item->middle_classification }}</td>
                            <td class="px-6 py-4">{{ $item->small_classification }}</td>
                            <td class="px-6 py-4">{{ $item->about}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-layout>
