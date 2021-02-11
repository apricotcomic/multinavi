<x-layout>
    <h2  class="text-2xl">New Landmark</h2>
    <form action="{{ route('landmark.store') }}" method="POST">
        @csrf
        <div>
            <button class="w-16 h-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
             type="submit" name="action" value="add">{{ __('add') }}</button>
            <button class="w-16 h-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded"
             type="submit" name="action" value="back">{{ __('back') }}</button>
        </div>
        <br>
        <table>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">Name</span>
                </td>
                <td>
                    <input class="form-input h-8 px-2" type="text" name="name">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">Zip</span>
                </td>
                <td>
                    <input class="form-input h-8 w-20 px-2" type="text" name="zip">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">Address</span>
                </td>
                <td>
                    <input class="form-input h-8 w-96 px-2" type="text" name="address">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">Telephone</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="tel">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">Fax</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="fax">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">Email</span>
                </td>
                <td>
                    <input class="form-input h-8 w-96 px-2" type="text" name="email">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">Longitude From</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="x1">
                </td>
                <td class="text-right">
                    <span class="px-2 py-4">To</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="x2">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">Latitude From</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="y1">
                </td>
                <td class="text-right">
                    <span class="px-2 py-4 text-right">To</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="y2">
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <span class="px-2 py-4">database</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="database">
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
