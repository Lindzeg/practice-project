@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="paginate-navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="relative inline-flex items-center px-4 py-2 text-base font-bold text-indigo-500">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-4 py-2 text-base text-indigo-500 font-bold">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="  relative inline-flex items-center text-indigo-500 px-4 py-2 text-base font-bold">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="relative inline-flex items-center px-4 py-2 text-base font-bold text-indigo-500">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
