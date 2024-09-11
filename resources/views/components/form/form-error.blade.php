@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-xs text-red-500 font-medium space-y-1 italic']) }}>
        @foreach ($messages as $message)
            <li>
                <p>{{ $message }}</p>
            </li>
        @endforeach
    </ul>
@endif
