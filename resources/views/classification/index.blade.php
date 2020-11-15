<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Classification Index</h2>
        <div>
            <button type=button onclick="location.href='{{ route('classification.create') }}'">{{ __('add') }}</button>
            <input type=button value="{{ __('back') }}" onclick="history.back()">
            <br><br>
            <table>
                <thead>
                    <tr>
                        <th>{{ __('No') }}</th>
                        <th>{{ __('Large Classification') }}</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Middle Classification') }}</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Small Classification') }}</th>
                        <th>{{ __('Name') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($classifications))
                        @foreach ($classifications as $classification)
                            <tr>
                                <td><a href="{{ route('classification.show', $classification->id) }}">{{ $classification->id }}</a></td>
                                <td>{{ $classification->large_classification }}</td>
                                <td>{{ $classification->large_classification_name }}</td>
                                <td>{{ $classification->middle_classification }}</td>
                                <td>{{ $classification->middle_classification_name }}</td>
                                <td>{{ $classification->small_classification }}</td>
                                <td>{{ $classification->small_classification_name }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </body>
</html>
