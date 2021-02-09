<x-layout>
    <h2  class="text-2xl">Landmark Data</h2>
    <form action="/landmark/{{ $landmark->id }}" method="POST">
        @csrf
        @method('PUT')
        <button class="w-16 h-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
         type="submit" name="action" value="edit">
            {{ __('edit') }}
        </button>
        <button class="w-16 h-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
         type="submit" name="action" value="back">
            {{ __('back') }}
        </button>
        <table>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Id</span>
                </td>
                <td>
                    <input class="form-input h-8 px-2" type="text" name="id" value="{{ $landmark->id }}">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Name</span>
                </td>
                <td>
                    <input class="form-input h-8 px-2" type="text" name="name" value="{{ $landmark->landmark_name }}">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Zip</span>
                </td>
                <td>
                    <input class="form-input h-8 w-24 px-2" type="text" name="zip" value="{{ $landmark->zip }}">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Address</span>
                </td>
                <td>
                    <input class="form-input h-8 w-96 px-2" type="text" name="address" value="{{ $landmark->address }}">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Telephone</span>
                </td>
                <td>
                    <input class="form-input h-8 w-32 px-2" type="text" name="tel" value="{{ $landmark->telephone_number }}">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Fax</span>
                </td>
                <td>
                    <input class="form-input h-8 w-32 px-2" type="text" name="fax" value="{{ $landmark->fax_number }}">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Email</span>
                </td>
                <td>
                    <input class="form-input h-8 w-96 px-2" type="text" name="email" value="{{ $landmark->email }}">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Longitude From</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="x1" value="{{ $landmark->x1_coordinate }}">
                </td>
                <td class=" text-right">
                    <span class="px-2 py-4">To</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="x2" value="{{ $landmark->x2_coordinate }}">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Latitude From</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="y1" value="{{ $landmark->y1_coordinate }}">
                </td>
                <td class=" text-right">
                    <span class="px-2 py-4">To</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="y2" value="{{ $landmark->y2_coordinate }}">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">database</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="database" value="{{ $landmark->database }}">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Start Date</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="datetime" name="start_date" value="{{ $landmark->start_date }}">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">End Date</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="datetime" name="end_date" value="{{ $landmark->end_date }}">
                </td>
            </tr>
        </table>
    </form>
</x-layout>
