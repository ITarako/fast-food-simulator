<ol class="breadcrumb float-sm-right">
    @foreach ($breadcrumbs as $item)
        @if (!$loop->last)
            <li class="breadcrumb-item"><a href="{{ $item['url'] }}">{{ $item['title'] }}</a></li>
        @else
            <li class="breadcrumb-item active" aria-current="page">{{ $item['title'] }}</li>
        @endif
    @endforeach
</ol>
