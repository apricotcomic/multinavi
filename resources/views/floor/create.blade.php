<x-layout>
    <h2  class="text-2xl">MultiNavi Floor Create</h2>
    <form action="{{ route('floor.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Floor Name</span>
                </td>
                <td>
                    <input class="form-input h-8 px-2" type="text" name="name">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Map File</span>
                </td>
                <td>
                    <input class="form-input h-8 w-96 px-2" type="file" name="file">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Longitude From</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="x1">
                </td>
                <td class=" text-right">
                    <span class="px-2 py-4">To</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="x2">
                </td>
            </tr>
            <tr>
                <td class=" text-right">
                    <span class="px-2 py-4">Latitude From</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="y1">
                </td>
                <td>
                    <span class="px-2 py-4">To</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="y2">
                </td>
            </tr>
            <tr>
                <td class="px-2 py-4">
                    <span class="px-2 py-4">Floor Height</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="text" name="z">
                </td>
            </tr>
            <tr>
                <td class="px-2 py-4">
                    <span class="px-2 py-4">StartDate</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="datetime" name="start_date">
                </td>
            </tr>
            <tr>
                <td class="px-2 py-4">
                    <span class="px-2 py-4">EndDate</span>
                </td>
                <td>
                    <input class="form-input h-8 w-28 px-2" type="datetime" name="end_date" value="9999/12/31">
                </td>
            </tr>
        </table>
        <input type="hidden" name="landmark_coordinate_id" value="{{ $landmark_coordinate_id }}">
        <div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
             type="submit" name="action" value="add">{{ __('add') }}</button>
            <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
             type=button value="{{ __('back') }}" onclick="history.back()">
        </div>
    </form>
</x-layout>
