@if ($product->hasPages())
    <div class="col-12 pb-1">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center mb-3">
                <li class="page-item @if ($product->currentPage() == 1) disabled @endif ">
                    <a class="page-link" href="{{ $product->previousPageUrl() }}"
                        aria-label="Previous">
                        <span aria-hidden="true">«</span>
                        <span class="sr-only">Trước</span>
                    </a>
                </li>
                @for ($i = 1; $i <= $product->total(); $i++)
                    <li class="page-item @if ($product->currentPage() == $i) active @endif">
                        <a class="page-link" href="?page={{ $i }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item @if ($product->total() == $product->currentPage()) disabled @endif">
                    <a class="page-link" href="{{ $product->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">»</span>
                        <span class="sr-only">Sau</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endif
