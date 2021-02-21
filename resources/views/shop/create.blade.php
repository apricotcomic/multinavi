<x-layout>
    <h2  class="text-2xl">shop Create</h2>
    <form action="{{ route('shop.store') }}" method="post">
        @csrf
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
         type="submit" name="action" value="edit">
            {{ __('store') }}
        </button>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
         type="button" onclick="history.back()">
            {{ __('back') }}
        </button>
        <table>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">Name</span>
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">About</span>
                </td>
                <td>
                    <input type="text" name="about">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">shop Flag</span>
                </td>
                <td>
                    <input type="text" name="x_point">
                </td>
                <td class="text-right">
                    <span class="px-2 py-4">/ </span>
                </td>
                <td>
                    <input type="text" name="y_point">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">Start Date</span>
                </td>
                <td>
                    <input type="date" name="start_date">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">End Date</span>
                </td>
                <td>
                    <input type="date" name="end_date" value="9999/12/31">
                </td>
            </tr>
        </table>
    </form>
</x-layout>
