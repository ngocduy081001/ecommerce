@php
    $stt = $data->perPage() * $data->currentPage() - $data->perPage();
@endphp

@foreach ($data as $key => $item)
    <tr>
        <td><input class="form-check-input" type="checkbox" name="input" value="{{ $item->id }}"
                id="cb-{{ $item->id }}">
        </td>
        <td>@php
            echo $stt += 1;
        @endphp</td>
        </td>
        <td>
            {{ $item->name }}
        </td>
        <td>
            /{{ $item->slug }}
        </td>
        <td><span class="badge bg-label-primary me-1">
                @if ($item->parent === '0')
                    Root
                @else
                    {{ $item->parentItem->name }}
                @endif

            </span></td>
        <td>
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" id="status" data-id="{{ $item->id }}"
                    onchange="return changeStatus(this)" value="{{ $item->status }}"
                    {{ $item->status == 1 ? 'checked' : '' }}>
            </div>
        </td>
        <td>
            <a style="padding: 0.5em" class="btn btn-outline-primary"
                href="{{ route('admin.category.edit', $item->id) }}"><i class="bx bx-edit-alt me-1"></i>
                Sửa</a>
            <a style="padding: 0.5em" class="btn btn-outline-danger"
                href="{{ route('admin.category.destroy', $item->id) }}" data-id="{{ $item->id }}"
                data-confirm-delete="true"><i class="bx bx-trash me-1"></i>
                Xoá</a>
        </td>
    </tr>
@endforeach
