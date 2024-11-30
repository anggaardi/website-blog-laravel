
@props('name')
<x-input-label for="{{ $name }}"  />
<select id="status" name="status" class="border-gray-300 rounded-md shadow-sm">
    {{ slot }}
</select>