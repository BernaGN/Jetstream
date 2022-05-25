<div class="mb-4">
    <label for="category" class="block text-gray-700 text-sm font-bold mb-2">{{ $text }}:</label>
    <select name="category_id"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="category" wire:model="category_id">
        <option value=""></option>
        {{ $slot }}
    </select>
</div>
