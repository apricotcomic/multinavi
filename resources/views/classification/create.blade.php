<x-layout>
    <h2 class="text-2xl">MultiNavi Classification Create</h2>
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
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
             type="submit" name="action" value="add">{{ __('add') }}</button>
            <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
             type=button value="{{ __('back') }}" onclick="history.back()">
        </div>
    </form>
</x-layout>

