@extends('admin.template.base')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Detail Pesanan</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i></a>
                            </li>
                            <li class="breadcrumb-item">Master Data</li>
                            <li class="breadcrumb-item">Data Pesanan</li>
                            <li class="breadcrumb-item active">Detail</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <p>Pemesan :</p>
                            <div class="row my-4">
                                <div class="col-10 d-flex">
                                    <div class="mx-2">
                                        <img src="{{ asset(empty($user->photo) ? 'assets-admin/images/user.png' : $user->photo) }}"
                                            height="50">

                                    </div>
                                    <div class="mx-2">
                                        <p>Nama: <strong>{{ $user->name }}</strong></p>
                                        <p>No. Handphone: <strong>{{ $user->phone_number }}</strong></p>
                                    </div>
                                </div>
                                <div class="col-2">
                                    @if ($order->status == 'Belum Dibayar')
                                        <span class="badge badge-danger">{{ $order->status }}</span>
                                    @elseif ($order->status == 'Sudah Dibayar')
                                        <span class="badge badge-primary">{{ $order->status }}</span>
                                    @elseif ($order->status == 'Sedang Diproses')
                                        <span class="badge badge-dark">{{ $order->status }}</span>
                                    @else
                                        <span class="badge badge-success">{{ $order->status }}</span>
                                    @endif
                                </div>

                            </div>

                            <p>Produk Yang Dipesan :</p>
                            <table id="table" class="table dt-responsive nowrap">
                                <thead>
                                    <th>Nama Produk</th>
                                    <th>Harga Satuan</th>
                                    <th>Jumlah</th>
                                    <th>Subtotal</th>
                                </thead>
                                <tbody>
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach (json_decode($order->products, true) as $product)
                                        <tr>
                                            <td>
                                                {{ App\Models\Product::where('id', $product['product_id'])->first()->name }}
                                            </td>
                                            <td>
                                                Rp.
                                                {{ App\Models\Product::where('id', $product['product_id'])->first()->price }}/Buah
                                            </td>
                                            <td>
                                                {{ $product['quantity'] }} Buah
                                            </td>
                                            <td>
                                                Rp.
                                                {{ str_replace(',', '.', number_format(App\Models\Product::where('id', $product['product_id'])->first()->price * $product['quantity'])) }}
                                            </td>
                                        </tr>
                                        @php
                                            $total += App\Models\Product::where('id', $product['product_id'])->first()->price * $product['quantity'];
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                            <p class="mt-4">Dipesan pada: {{ $order->created_at }}</p>
                            <h3 class="float-right">
                                Total = Rp. {{ str_replace(',', '.', number_format($total)) }}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
