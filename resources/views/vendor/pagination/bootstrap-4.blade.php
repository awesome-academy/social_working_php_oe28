@if ($paginator->hasPages())
    <!-- Pagination -->
    <div class="tile-footer bg-transparent-black-2 rounded-bottom-corners">
        <div class="row">
            <div class="col-sm-12 text-center sm-center">
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                    @else
                        <li>
                            <a href="{{ $paginator->previousPageUrl() }}">
                                <i class="fa fa-angle-double-left"></i>
                            </a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="active"><span>{{ $page }}</span></li>
                                @elseif (($page == $paginator->currentPage() + 1 || $page == $paginator->currentPage() + 2) || $page == $paginator->lastPage())
                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @elseif ($page == $paginator->lastPage() - 1)
                                    <li class="disabled"><span><i class="fa fa-ellipsis-h"></i></span></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li>
                            <a href="{{ $paginator->nextPageUrl() }}">
                                <span><i class="fa fa-angle-double-right"></i></span>
                            </a>
                        </li>
                    @else
                        <li class="disabled">
                            <span><i class="fa fa-angle-double-right"></i></span>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <!-- Pagination -->
@endif
