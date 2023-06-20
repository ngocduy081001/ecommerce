@foreach ($cat as $item)
    @if (count($item['children']) > 1)
        <div class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown"> <i
                    class="fa fa-angle-down float-right mt-1"></i>{{ $item['name'] }}</a>
            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                @include('client.partial.nav', ['cat' => $item['children']])
            </div>
        </div>
    @else
        <a href="" class="nav-item nav-link">{{ $item['name'] }}</a>
    @endif
@endforeach
