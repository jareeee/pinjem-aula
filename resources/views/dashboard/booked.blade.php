@extends('dashboard.layout.layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="table-responsive">
                    <table class="table table-hover table-condensed">
                        <thead class="thead-light">
                            <th scope="col">#</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Status Pembayaran</th>
                            <th scope="col"></th>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>#{{ $order->number }}</td>
                                    <td>{{ number_format($order->price, 2, ',', '.') }}</td>
                                    <td>
                                        @if ($order->payment_status == 1)
                                            Menunggu Pembayaran
                                        @elseif ($order->payment_status == 2)
                                            Sudah Dibayar
                                        @else
                                            Kadaluarsa
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection