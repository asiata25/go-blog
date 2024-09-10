@props(['active' => false])

<a aria-current="{{ $active ? 'page' : false }}"
    {{ $attributes->class(['text-sm font-semibold transition duration-150 leading-6 text-gray-900 py-0.5 px-3 border rounded-full', $active ? 'border-indigo-600 hover:shadow hover:shadow-indigo-500 hover:-translate-y-1' : 'border-transparent'])->merge(['href' => '/']) }}>{{ $slot }}</a>
