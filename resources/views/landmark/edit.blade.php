<x-layout>
    <h2>Landmark Data</h2>
    <form action="/landmark/{{ $landmark->id }}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit" name="action" value="edit">
            {{ __('edit') }}
        </button>
        <button type="submit" name="action" value="back">
            {{ __('back') }}
        </button>
        <div>
            Id:<input type="text" name="id" value="{{ $landmark->id }}"><br>
            Name:<input type="text" name="name" value="{{ $landmark->landmark_name }}"><br>
            Zip:<input type="text" name="zip" value="{{ $landmark->zip }}"><br>
            Address:<input type="text" name="address" value="{{ $landmark->address }}"><br>
            Telephone:<input type="text" name="tel" value="{{ $landmark->telephone_number }}"><br>
            Fax:<input type="text" name="fax" value="{{ $landmark->fax_number }}"><br>
            Email:<input type="text" name="email" value="{{ $landmark->email }}"><br>
            Longitude From:<input type="text" name="x1" value="{{ $landmark->x1_coordinate }}">
            To:<input type="text" name="x2" value="{{ $landmark->x2_coordinate }}"><br>
            Latitude From:<input type="text" name="y1" value="{{ $landmark->y1_coordinate }}">
            To:<input type="text" name="y2" value="{{ $landmark->y2_coordinate }}"><br>
            database:<input type="text" name="database" value="{{ $landmark->database }}"><br>
            Start Date:<input type="datetime" name="start_date" value="{{ $landmark->start_date }}"><br>
            End Date:<input type="datetime" name="end_date" value="{{ $landmark->end_date }}"><br>
        </div>
    </form>
</x-layout>
