<x-layout>
    <h1>MultiNavi Management Site</h1>
    <div>
        <a href ="{{ route('landmark.index') }}">Landmark List</a><br>
        <br><br>
        <a href ="{{ route('classification.index') }}">Classification List</a><br>
        <a href ="{{ route('itemdata.index') }}">Item Data List</a><br>
        <br>
    </div>
</x-layout>
