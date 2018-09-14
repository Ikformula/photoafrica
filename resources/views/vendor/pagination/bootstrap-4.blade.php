@if ($paginator->hasPages())
    <div class="pagination">
        <div class="nav-links">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            {{--<a class="prev page-numbers disabled"><i class="lnr lnr-chevron-left"></i></a>--}}
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="prev page-numbers"><i class="lnr lnr-chevron-left"></i></a>

        @endif

        {{-- Pagination Elements --}}
        {{--@foreach ($elements as $element)--}}
            {{-- "Three Dots" Separator --}}
            {{--@if (is_string($element))--}}
                    {{--<a class="page-numbers disabled">{{ $element }}</a>--}}
            {{--@endif--}}

            {{-- Array Of Links --}}
            {{--@if (is_array($element))--}}
                {{--@foreach ($element as $page => $url)--}}
                    {{--@if ($page == $paginator->currentPage())--}}
                            {{--<span class="page-numbers current">{{ $page }}</span>--}}
                    {{--@else--}}
                            {{--<a href="{{ $url }}" class="page-numbers">{{ $page }}</a>--}}
                    {{--@endif--}}
                {{--@endforeach--}}
            {{--@endif--}}
        {{--@endforeach--}}

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())

           <a href="{{ $paginator->nextPageUrl() }}" class="next page-numbers"><i class="lnr lnr-chevron-right"></i></a>
        @else
            {{--<a class="next page-numbers disabled"><i class="lnr lnr-chevron-right"></i></a>--}}
        @endif
        </div>
    </div>
@endif
