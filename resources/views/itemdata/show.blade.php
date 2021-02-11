<x-layout>
    <h2  class="text-2xl">MultiNavi ItemData Show</h2>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
     type="button" onclick="location.href='{{ route('itemdata.edit', $item->id) }}'">
        {{ __('update') }}
    </button>
    <form action="{{ route('itemdata.destroy', $item->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
         type="submit">
            {{ __('delete') }}
        </button>
    </form>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
     type="button" onclick="history.back()">
        {{ __('back') }}
    </button>
    <table>
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">Item Name</span>
            </td>
            <td>
                {{ $item->item_name }}
            </td>
        </tr>
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">Large Classification</span>
            </td>
            <td>
                {{ $item->large_classification }}
            </td>
        </tr>
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">Middle Classification</span>
            </td>
            <td>
                {{ $item->middle_classification }}
            </td>
        </tr>
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">Small Classification</span>
            </td>
            <td>
                {{ $item->small_classification }}
            </td>
        </tr>
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">About</span>
            </td>
            <td>
                {{ $item->about }}
            </td>
        </tr>
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">StartDate</span>
            </td>
            <td>
                {{ $item->start_data }}
            </td>
        </tr>
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">EndDate</span>
            </td>
            <td>
                {{ $item->end_data }}
            </td>
        </tr>
    </table>
</x-layout>
