@extends('dashboard.layout.layout')

@section('content')
<div class="d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3">
    <h1 class="h2">Administrator</h1>
</div>

@if(session()->has('success'))
<div class="alert text-center alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }} 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<table class="table text-center table-bordered mt-5" style="border: 1px solid black">
    <thead>
      <tr>
        <th scope="col">Nama</th>
        <th scope="col">No. Telp</th>
        <th scope="col">Nama Acara</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Jam</th>
        <th scope="col-2">Aksi</th>
      </tr>
    </thead>
    <tbody>
    @foreach($bookings as $booking)
      <tr>
          <td>{{ $booking->user->full_name }}</td>
          <td>{{ $booking->user->no_telepon }}</td>
          <td>{{ $booking->name_event }}</td>
          <td>{{ \Carbon\Carbon::parse($booking->date)->locale('id')->isoFormat('D MMMM YYYY') }}</td>
          <td>{{ date('H:i', strtotime($booking->time_start))  }} - {{ date('H:i', strtotime($booking->time_end)) }}</td>
          <td class="form-aksi">
            @if($booking->is_confirm === 0)
            <form action="{{ url('/dashboard/admin/'. $booking->id)  }}" method="post">
              @method('put')
              @csrf
              <input type="checkbox" name="is_confirm" checked hidden>
              <button class="btn btn-info" type="submit"><span data-feather="check"></span></button>
            </form>
            @endif
            <form action="{{ url('/dashboard/admin/'. $booking->id)  }}" method="post">
              @method('delete')
              @csrf
                <button class="btn btn-info" onclick="return confirm('Are you sure you want to delete this post?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection