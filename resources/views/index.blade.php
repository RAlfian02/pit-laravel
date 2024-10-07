<h1>Contents of {{ '/' . $path }}</h1>

<ul>
    @foreach ($items as $item)
        <li>
            @php
                $itemPath = $path ? $path . '/' . $item : $item;
            @endphp

            @if (is_dir(public_path($itemPath)))
                <a href="{{ $itemPath }}">{{ $item }}/</a>
            @else
                <a href="{{ $itemPath }}">{{ $item }}</a>
            @endif

            @if(false) @if (is_dir(public_path($itemPath)))
                <a href="{{ url($itemPath) }}">{{ $item }}</a> (Folder)
            @else
                <a href="{{ asset($itemPath) }}">{{ $item }}</a> (File)
            @endif @endif
        </li>
    @endforeach
</ul>
