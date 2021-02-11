<x-layout>
    <h2  class="text-2xl">MultiNavi ItemData Edit</h2>
    <form action="{{ route('itemdata.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
         type="submit" name="action" value="edit">
            {{ __('edit') }}
        </button>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
         type="button" onclick="history.back()">
            {{ __('back') }}
        </button>
        <table>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">Item Name</span>
                </td>
                <td>
                    <input class="form-input h-8 px-2" type="text" name="item_name" value="{{ $item->item_name }}">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">Large Classification</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="large_classification" value="{{ $item->large_classification }}">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">Middle Classification</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="middle_classification" value="{{ $item->middle_classification }}">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">Small Classification</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="small_classification" value="{{ $item->small_classification }}">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">About</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="about" value="{{ $item->about }}">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">StartDate</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="datetime" name="start_date">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">EndDate</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="datetime" name="end_date" value="9999/12/31">
                </td>
            </tr>
        </table>
    </form>
</x-layout>
