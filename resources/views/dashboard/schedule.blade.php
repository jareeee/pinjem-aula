@extends('dashboard.layout.layout')

@section('content')
    <div class="d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3">
        <h1 class="h2">Jadwal yang sudah kamu buat</h1>
    </div>

    <a href="{{ route('booking') }}"><button type="button" class="btn btn-info ">Tambah jadwal</button></a>

    <table class="table text-center table-bordered mt-5" style="border: 1px solid black">
        <thead>
          <tr>
            <th scope="col">Tanggal</th>
            <th scope="col">Waktu</th>
            <th scope="col">Konfirmasi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($bookings as $booking)
          <tr>
              <td>{{ \Carbon\Carbon::parse($booking->date)->locale('id')->isoFormat('D MMMM YYYY') }}</td>
              <td>{{ date('H:i', strtotime($booking->time_start))  }} - {{ date('H:i', strtotime($booking->time_end)) }}</td>
              @if($booking->status === 1)
                <td>Terkonfirmasi</td>
              @else
                <td>Menunggu</td>
              @endif
          </tr>
        @endforeach
        </tbody>
      </table>

    
    
@endsection