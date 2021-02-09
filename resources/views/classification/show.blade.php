<x-layout>
    <h2  class="text-2xl">MultiNavi Classification Show</h2>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
     type="button" onclick="location.href='{{ route('classification.edit', $classification->id) }}'">
        {{ __('update') }}
    </button>
    <form action="{{ route('classification.destroy', $classification->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
         type="submit">
            {{ __('delete') }}
        </button>
    </form>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
     type="button" onclick="history.back()">
        {{ __('back') }}
    </button>
    <div>
        Large Classification:{{ $classification->large_classification }}<br>
        Name:{{ $classification->large_classification_name }}<br>
        Middle Classification:{{ $classification->middle_classification }}<br>
        Name:{{ $classification->middle_classification_name }}<br>
        Small Classification:{{ $classification->small_classification }}<br>
        Name:{{ $classification->small_classification_name }}<br>
    </div>
</x-layout>
