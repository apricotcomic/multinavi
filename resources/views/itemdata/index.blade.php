<x-layout>
    <h2  class="text-2xl">ItemData Index</h2>
    <div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
         type=button onclick="location.href='{{ route('itemdata.create') }}'">{{ __('add') }}</button>
        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
         type=button value="{{ __('back') }}" onclick="history.back()">
        <br><br>
        <table>
            <thead>
                <tr>
                    <th  class="border">{{ __('No') }}</th>
                    <th  class="border">{{ __('Name') }}</th>
                    <th  class="border">{{ __('Large Classification') }}</th>
                    <th  class="border">{{ __('Middle Classification') }}</th>
                    <th  class="border">{{ __('Small Classification') }}</th>
                    <th  class="border">{{ __('About') }}</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($items))
                    @foreach ($items as $item)
                        <tr>
                            <td  class="border"><a href="{{ route('itemdata.show', $item->id )}}">{{ $item->id }}</a></td>
                            <td  class="border"><a href="{{ route('itemdata.show', $item->id )}}">{{ $item->item_name }}</a></td>
                            <td  class="border">{{ $item->large_classification }}</td>
                            <td  class="border">{{ $item->middle_classification }}</td>
                            <td  class="border">{{ $item->small_classification }}</td>
                            <td  class="border">{{ $item->about}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-layout>
