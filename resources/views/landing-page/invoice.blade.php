<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Rico Pahlefi, Kayong Developer">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Struk Pesanan Apotek Desta Farma</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/font-awesome/css/font-awesome.min.css') }}">

    <!-- MAIN Project CSS file -->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/main.css') }}">

</head>

<body data-theme="light" class="font-nunito">
    @php
        $web = App\Models\WebConfig::first();
    @endphp
    <!-- mani page content body part -->
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 mt-4">
                <div class="card">
                    <div class="body">
                        <h3>Struk Pesanan</h3>
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6">
                                <address>
                                    <strong>{{ $web->name }}</strong><br>
                                    {{ $web->address }}<br>
                                    {{ $web->phone_number }}
                                </address>
                            </div>
                            <div class="col-md-6 col-sm-6 text-right">
                                <p class="mb-0"><strong>Waktu Pemesanan: </strong> {{ $order->created_at }}</p>
                                <p class="mb-0"><strong>Status: </strong> <span
                                        class="badge badge-warning mb-0">{{ $order->status }}</span></p>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Produk</th>
                                                <th>Jumlah</th>
                                                <th class="hidden-sm-down">Harga Satuan</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $total = 0;
                                            @endphp
                                            @foreach (json_decode($order->products, true) as $product)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        {{ App\Models\Product::findOrFail($product['product_id'])->name }}
                                                    </td>
                                                    <td>
                                                        {{ $product['quantity'] }}
                                                    </td>
                                                    <td>
                                                        {{ formatRupiah(App\Models\Product::findOrFail($product['product_id'])->price) }}
                                                    </td>
                                                    <td>
                                                        {{ formatRupiah($product['quantity'] * App\Models\Product::findOrFail($product['product_id'])->price) }}
                                                    </td>
                                                </tr>
                                                @php
                                                    $total += App\Models\Product::where('id', $product['product_id'])->first()->price * $product['quantity'];
                                                @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row clearfix">
                            <div class="col-md-6"> </div>
                            <div class="col-md-6 text-right">
                                <p class="mb-0"><b>Total:</b> {{ formatRupiah($total) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="{{ asset('assets-admin/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets-admin/bundles/vendorscripts.bundle.js') }}"></script>

    <!-- page js file -->
    <script src="{{ asset('assets-admin/bundles/mainscripts.bundle.js') }}"></script>
</body>

</html>
