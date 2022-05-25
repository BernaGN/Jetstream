<table class="table-fixed w-full">
    <thead>
        <tr class="bg-indigo-600 text-white">
            @foreach ($headers as $header)
                <th class="px-4 py-2">{{ $header }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>
