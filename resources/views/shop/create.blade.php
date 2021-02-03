<x-layoout>
    <h2>shop Create</h2>
    <form action="{{ route('shop.store', ['landmark_coordinate_id' => $landmark_coordinate_id]) }}" method="post">
        @csrf
        <button type="submit" name="action" value="edit">
            {{ __('store') }}
        </button>
        <button type="button" onclick="history.back()">
            {{ __('back') }}
        </button>
        <div>
            Name:<input type="text" name="name"><br>
            About:<input type="text" name="about"><br>
            Floor:{{Form::select('floor',$floors,null,['class' => 'form','name' => 'floor_name'])}}<br>
            Longitude From:<input type="text" name="x1">
            To:<input type="text" name="x2"><br>
            Latitude From:<input type="text" name="y1">
            To:<input type="text" name="y2"><br>
            shop Flag:<input type="text" name="x_point">
            / <input type="text" name="y_point"><br>
            Start Date:<input type="date" name="start_date"><br>
            End Date:<input type="date" name="end_date" value="9999/12/31">
        </div>
        <input type="hidden" name="landmark_coordinate_id" value="{{ $landmark_coordinate_id }}">
    </form>
</x-layout>
