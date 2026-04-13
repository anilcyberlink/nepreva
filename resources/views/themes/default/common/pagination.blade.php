@if ($paginator->hasPages())
<div class="row">
    <div class="col-xl-12">
        <div class="basic-pagination text-center">
            <ul>

                {{-- Previous Button --}}
                @if ($paginator->onFirstPage())
                    <li style="opacity: 0.4; pointer-events: none; cursor: not-allowed;">
                        <a href="#"><i class="fas fa-angle-double-left"></i></a>
                    </li>
                @else
                    <li>
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                            <i class="fas fa-angle-double-left"></i>
                        </a>
                    </li>
                @endif

                {{-- Page Numbers --}}
                @foreach ($elements as $element)

                    {{-- Dots --}}
                    @if (is_string($element))
                        <li style="opacity: 0.4; pointer-events: none;"><a href="#">…</a></li>
                    @endif

                    {{-- Page Number Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                {{-- No <a> tag, not clickable --}}
                                <li class="active" aria-current="page" style="pointer-events: none;">
                                    <span>{{ $page }}</span>
                                </li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif

                @endforeach

                {{-- Next Button --}}
                @if ($paginator->hasMorePages())
                    <li>
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                    </li>
                @else
                    <li style="opacity: 0.4; pointer-events: none; cursor: not-allowed;">
                        <a href="#"><i class="fas fa-angle-double-right"></i></a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</div>
@endif
