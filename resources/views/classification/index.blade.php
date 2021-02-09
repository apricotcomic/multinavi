<x-layout>
    <h2  class="text-2xl">Classification Index</h2>
    <div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
         type=button onclick="location.href='{{ route('classification.create') }}'">{{ __('add') }}</button>
        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
         type=button value="{{ __('back') }}" onclick="history.back()">
        <br><br>
        <table>
            <thead>
                <tr>
                    <th  class="border">{{ __('No') }}</th>
                    <th  class="border">{{ __('Large Classification') }}</th>
                    <th  class="border">{{ __('Name') }}</th>
                    <th  class="border">{{ __('Middle Classification') }}</th>
                    <th  class="border">{{ __('Name') }}</th>
                    <th  class="border">{{ __('Small Classification') }}</th>
                    <th  class="border">{{ __('Name') }}</th>
                    <th  class="border"></th>
                </tr>
            </thead>
            <tbody>
                @if(isset($classifications))
                    @foreach ($classifications as $classification)
                        <tr>
                            <td  class="border"><a href="{{ route('classification.show', $classification->id) }}">{{ $classification->id }}</a></td>
                            <td  class="border">{{ $classification->large_classification }}</td>
                            <td  class="border">{{ $classification->large_classification_name }}</td>
                            <td  class="border">{{ $classification->middle_classification }}</td>
                            <td  class="border">{{ $classification->middle_classification_name }}</td>
                            <td  class="border">{{ $classification->small_classification }}</td>
                            <td  class="border">{{ $classification->small_classification_name }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-layout>
