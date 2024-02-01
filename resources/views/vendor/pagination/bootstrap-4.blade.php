@if ($paginator->hasPages())
       <div class="row">
        <dic class="col-5">
            <div class="custom-pagination">
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span>{{ $page }}</span>
                            @else
                                <a  href="{{ $url }}">{{ $page }}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach
    
                {{-- Next Page Link --}}
              
    
        </div>
        
        </dic>
       </div>
@endif
