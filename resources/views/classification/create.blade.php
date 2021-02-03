<x-layout>
    <h2>MultiNavi Classification Create</h2>
    <form action="{{ route('classification.store') }}" method="POST">
        @csrf
        <div>
            Large Classification:<input type="text" name="large_classification"><br>
            Name:<input type="text" name="large_classification_name"><br>
            Middle Classification:<input type="text" name="middle_classification"><br>
            Name:<input type="text" name="middle_classification_name"><br>
            Small Classification:<input type="text" name="small_classification"><br>
            Name:<input type="text" name="small_classification_name"><br>
        </div>
        <div>
            <button type="submit" name="action" value="add">{{ __('add') }}</button>
            <input type=button value="{{ __('back') }}" onclick="history.back()">
        </div>
    </form>
</x-layout>

