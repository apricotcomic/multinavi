<x-layout>
    <h2  class="text-2xl">MultiNavi ItemData Create</h2>
    <form action="{{ route('itemdata.store') }}" method="POST">
        @csrf
        <div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
             type="submit" name="action" value="add">{{ __('add') }}</button>
            <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
             type=button value="{{ __('back') }}" onclick="history.back()">
        </div>
        <table>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Item Name</span>
                </td>
                <td>
                    <input class="form-input h-8 px-2" type="text" name="item_name">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Large Classification</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="large_classification">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Middle Classification</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="middle_classification">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Small Classification</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="small_classification">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">About</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="about">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">StartDate</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="datetime" name="start_date">
                </td>
            </tr>
            <tr>
                <td>
                    <span class="px-2 py-4">EndDate</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="datetime" name="end_date" value="9999/12/31">
                </td>
            </tr>
        </table>
    </form>
</x-layout>
