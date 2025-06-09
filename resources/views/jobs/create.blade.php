
<x-layout>
<x-slot name='title'>Create Job</x-slot>
<x-slot name='sub_title'>Create Job</x-slot>


<form action="/jobs" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>

</form>
</x-layout>

