<div class="table-responsive">
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
        <thead>
            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                <th class="w-10px pe-2">No</th>
                <th class="min-w-100px">Nama Customer</th>
                <th class="min-w-100px">Nama Produk</th>
                <th class="min-w-100px">Qty</th>
                <th class="min-w-100px">Harga Produk</th>
                <th class="min-w-100px">Total Harga</th>
                <th class="min-w-100px">Kode Pesanan</th>
                <th class="min-w-100px">Status</th>
                <th class="min-w-70px">Actions</th>
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
                <td>
                    <div class="d-flex align-items-center">
                        <span class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url('{{ asset('storage/'.$item->image_product) }}');"></span>
                        </span>
                        <div class="ms-5">
                            {{ $item->name_product}}
                        </div>
                    </div>
                </td>
                <td class=" pe-0">
                    <span class="fw-bolder text-dark">{{ $item->qty }}</span>
                </td>
                <td class=" pe-0">
                    <span class="fw-bolder text-dark">Rp. {{ $item->price_product }}</span>
                </td>
                <td class=" pe-0">
                    <span class="fw-bolder text-dark">Rp. {{ $item->price_product * $item->qty }}</span>
                </td>
                <td class="pe-0">
                    <span class="fw-bolder text-dark">{{ Str::limit($item->order_number,15) }}</span>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bolder text-dark">{{ $item->status }}</span>
                </td>
                <td class="text-end">
                    <div class="btn-group" role="group">
                        @if($item->status == 'Pesanan Selesai')
                            <button id="aksi" type="button" class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="dropdown" aria-expanded="false">
                                Aksi
                                <span class="svg-icon svg-icon-5 m-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                    </svg>
                                </span>
                            </button>
                            <div class="dropdown-menu menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" aria-labelledby="aksi">
                                {{-- <div class="menu-item px-3">
                                    <a href="javascript:;" onclick="handle_confirm('Apakah Anda Ingin Mengirim Pesan?','Yakin','Tidak','POST','{{route('admin.order.kirim',$item->id)}}');" class="menu-link px-3">Kirim Pesan</a>
                                </div> --}}
                                <div class="menu-item px-3">
                                    <a href="{{route('admin.order.kirim',$item->id)}}" class="menu-link px-3">Kirim Pesan</a>
                                </div>
                            </div>

                        @elseif($item->status == 'Pesanan Dibatalkan')


                        @else
                        <button id="aksi" type="button" class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="dropdown" aria-expanded="false">
                            Aksi
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                </svg>
                            </span>
                        </button>
                        <div class="dropdown-menu menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" aria-labelledby="aksi">
                            
                            <div class="menu-item px-3">
                                <a href="javascript:;" onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','POST','{{route('admin.order.batal',$item->id)}}');" class="menu-link px-3">Batal</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="javascript:;" onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','POST','{{route('admin.order.selesai',$item->id)}}');" class="menu-link px-3">Selesai</a>
                            </div>
                        </div>
                        @endif
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{ $collection->links('theme.web.pagination') }}