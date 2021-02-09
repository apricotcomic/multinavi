<x-layout>
    <h2  class="text-2xl">Landmark Data</h2>
    <form action="{{ route('landmark.destroy', $id) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="w-20 h-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
            type="button" onclick="location.href='{{ route('landmark.edit', $id) }}'">
            {{ __('update') }}
        </button>
        <button class="w-20 h-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
            type="submit">
            {{ __('delete') }}
        </button>
        <button class="w-16 h-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
            type="button" onclick="history.back()">
            {{ __('back') }}
        </button>
    </form>
    <table>
        <tr>
            <td class=" text-right">
                <span class="px-2 py-4">Id</span>
            </td>
            <td>
                {{ $id }}
            </td>
        </tr>
        <tr>
            <td class=" text-right">
                <span class="px-2 py-4">Name</span>
            </td>
            <td>
                {{ $landmark->landmark_name }}
            </td>
        </tr>
        <tr>
            <td class=" text-right">
                <span class="px-2 py-4">Zip</span>
            </td>
            <td>
                {{ $landmark->zip }}
            </td>
        </tr>
        <tr>
            <td class=" text-right">
                <span class="px-2 py-4">Address</span>
            </td>
            <td>
                {{ $landmark->address }}
            </td>
        </tr>
        <tr>
            <td class=" text-right">
                <span class="px-2 py-4">Telephone</span>
            </td>
            <td>
                {{ $landmark->telephone_number }}
            </td>
        </tr>
        <tr>
            <td class=" text-right">
                <span class="px-2 py-4">Fax</span>
            </td>
            <td>
                {{ $landmark->fax_number }}
            </td>
        </tr>
        <tr>
            <td class=" text-right">
                <span class="px-2 py-4">Email</span>
            </td>
            <td>
                {{ $landmark->email }}
            </td>
        </tr>
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">Longitude From</span>
            </td>
            <td>
                {{ $landmark->x1_coordinate }}
            </td>
            <td class="text-right">
                <span class="px-2 py-4">To</span>
            </td>
            <td>
                {{ $landmark->x2_coordinate }}
            </td>
        </tr>
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">Latitude From</span>
            </td>
            <td>
                {{ $landmark->y1_coordinate }}
            </td>
            <td class="text-right">
                <span class="px-2 py-4">To</span>
            </td>
            <td>
                {{ $landmark->y2_coordinate }}
            </td>
        </tr>
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">database</span>
            </td>
            <td>
                {{ $landmark->database }}
            </td>
        </tr>
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">start date</span>
            </td>
            <td>
                {{ $landmark->start_date }}
            </td>
        </tr>
        <tr>
            <td class="text-right">
                <span class="px-2 py-4">end date</span>
            </td>
            <td>
                {{ $landmark->end_date }}
            </td>
        </tr>
    </table>

</x-layout>
