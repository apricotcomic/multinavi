<x-layout>
    <h2  class="text-2xl">MultiNavi ItemData Create</h2>
    <form action="{{ route('itemdata.store') }}" method="POST">
        @csrf
        <div>
            Item Name:<input type="text" name="item_name"><br>
            Large Classification:<input type="text" name="large_classification"><br>
            Middle Classification:<input type="text" name="middle_classification"><br>
            Small Classification:<input type="text" name="small_classification"><br>
            About:<input type="text" name="about"><br>
            StartDate:<input type="datetime" name="start_date"><br>
            EndDate:<input type="datetime" name="end_date" value="9999/12/31"><br>
        </div>
        <div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
             type="submit" name="action" value="add">{{ __('add') }}</button>
            <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
             type=button value="{{ __('back') }}" onclick="history.back()">
        </div>
    </form>
</x-layout>
