<x-layout>
    <h2>ItemData Index</h2>
    <div>
        <button type=button onclick="location.href='{{ route('itemdata.create') }}'">{{ __('add') }}</button>
        <input type=button value="{{ __('back') }}" onclick="history.back()">
        <br><br>
        <table>
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
            <tbody>
                @if(isset($items))
                    @foreach ($items as $item)
                        <tr>
                            <td><a href="{{ route('itemdata.show', $item->id )}}">{{ $item->id }}</a></td>
                            <td><a href="{{ route('itemdata.show', $item->id )}}">{{ $item->item_name }}</a></td>
                            <td>{{ $item->large_classification }}</td>
                            <td>{{ $item->middle_classification }}</td>
                            <td>{{ $item->small_classification }}</td>
                            <td>{{ $item->about}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-layout>
