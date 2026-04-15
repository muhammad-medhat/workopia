
<x-layout>
<x-slot name='title'>Create Job</x-slot>
<x-slot name='sub_title'>Create Job</x-slot>


<form action="/jobs" method="POST">
    @csrf
    <div class="mb-4">
        <label for="name">Name:</label>
        <input type="text" class="border rounded py-2 px-4" id="name" name="name" value="{{ old('name') }}">
        @error('name')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-4">
        <label for="description">Description:</label>
        <textarea id="description" name="description" class="border rounded py-2 px-4  ">{{ old('description') }}</textarea>
        @error('description')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-4">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Submit
        </button>
    </div>

</form>
</x-layout>

