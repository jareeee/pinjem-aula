@extends('dashboard.layout.layout')

@section('content')
    @if(session()->has('success'))
        <div class="alert text-center alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }} 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Data Order</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-condensed">
                        @foreach ($orders as $order)
                        <tr>
                            <td>ID</td>
                            <td><b>#{{ $order->number }}</b></td>
                        </tr>
                        <tr>
                            <td>Total Harga</td>
                            <td><b>Rp {{ number_format($order->price, 2, ',', '.') }}</b></td>
                        </tr>
                        <tr>
                            <td>Status Pembayaran</td>
                            <td><b>
                                    @if ($order->payment_status == 1)
                                        Menunggu Pembayaran
                                    @elseif ($order->payment_status == 2)
                                        Sudah Dibayar
                                    @else
                                        Kadaluarsa
                                    @endif
                                </b></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td><b>{{ $order->created_at->format('d M Y H:i') }}</b></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Pembayaran</h5>
                </div>
                <div class="card-body">
                    @if ($order->payment_status == 1)
                        <button class="btn btn-primary" id="pay-button">Bayar Sekarang</button>
                    @else
                        Pembayaran berhasil
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT') }}"></script>
    <script>
        const payButton = document.querySelector('#pay-button');
        payButton.addEventListener('click', function(e) {
            e.preventDefault();
            snap.pay('{{ $snapToken }}', {
                // Optional
                onSuccess: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                }
            });
        });
    </script>
@endsection