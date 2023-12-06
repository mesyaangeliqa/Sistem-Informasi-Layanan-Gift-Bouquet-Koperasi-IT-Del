<div class="table-responsive">
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
        <thead>
            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                <th class="w-10px pe-2">No</th>
                <th class="min-w-100px">Nama Customer</th>
                <th class=" min-w-100px">Kritik</th>
                <th class=" min-w-70px">Actions</th>
            </tr>
        </thead>
        <tbody class="fw-bold text-gray-600">
            @foreach($collection as $item)
            <tr>
                <td>
                    {{$loop->iteration}}
                </td>
                <td class=" pe-0">
                    <span class="fw-bolder text-dark">{{ $item->name }}</span>
                </td>
                <td class=" pe-0">
                    <span class="fw-bolder text-dark">{{ $item->critic }}</span>
                </td>
                <td>
                    <a href="javascript:;" onclick="handle_delete('{{route('admin.critics.destroy',$item->id)}}');" class="menu-link px-3">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{ $collection->links('theme.web.pagination') }}