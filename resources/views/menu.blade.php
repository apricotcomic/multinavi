<x-layout>
    <h1 class="text-3xl">MultiNavi Management Site</h1>
    <div>
        <br>
        <a class="text-blue-500 underline text-lg" href ="{{ route('landmark.index') }}">Landmark List</a><br>
        <br>
        <a class="text-blue-500 underline text-lg" href ="{{ route('shop.index') }}">Landmark List</a><br>
        <br>
        <a class="text-blue-500 underline text-lg" href ="{{ route('classification.index') }}">Classification List</a><br>
        <a class="text-blue-500 underline text-lg" href ="{{ route('itemdata.index') }}">Item Data List</a><br>
        <br>
    </div>
</x-layout>
