@extends('layout.layout')

@section('content')


{{-- Persyaratan --}}
<div class="required container">
  <h1 class="text-center" style="">Persyaratan</h1>
  <hr>
  <div class="content-required">
    <ol>
      <li>Tidak boleh memakai tanggal yang sama dengan orang lain yang sudah memesan</li>
      <li>Booking harus setelah hari ini</li>
      <li>Menyerahkan surat permohonan yang ditujukan kepada smkn 26 jakarta </li>
      <li>Panitia bertanggungjawab terhadap kenyamanan, kebersihan, dan keamanan </li>
      <li>peminjam tidak boleh merusak apapun properti yang ada di aula </li>
      <li>peminjam harus menyerahkan dokumentasi acara di aula </li>
    </ol>
  </div>
  <hr>
  @if(session()->has('success'))
    <div class="alert text-center alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }} 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
</div>
<h1 class="text-center mt-5 mb-2">Booking Form</h1>
<div class="box-form">
  <form action="{{ route('booking-post') }}" method="post">
    @csrf
    <div class="container mt-4">
      <div class="row">
                  <div class="col">
                    <label for="full_name">Nama lengkap</label>
                    <input type="text" class="@error('full_name') is-invalid @enderror" name="full_name" id="full_name">
                    @error('full_name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>  
                    @enderror
                  </div>
                  <div class="col">
                    <label for="date">Tanggal peminjaman</label>
                      <input type="date" name="date" id="date" class="date @error('date') is-invalid @enderror" autocomplete="off">
                    @error('date')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>  
                    @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="no_telepon">Nomer telepon</label>
                    <input type="tel" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" class="@error('no_telepon') is-invalid @enderror" name="no_telepon" id="no_telepon" style="width:31.8rem;">
                    @error('no_telepon')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>  
                    @enderror
                  </div>
                  <div class="col" style="margin-left: 2rem;">
                    <label for="time_start">Waktu mulai (07:00-17:00)</label>
                    <div class="form-class">
                      <input type="time" style="font-size:19px; width:12rem" name="time_start" id="time_start" min="07:00" class="@error('time_start') is-invalid @enderror" max="17:00" required>
                      <span class="validity"></span>
                    </div>
                    @error('time_start')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>  
                    @enderror
                  </div>
                  <div class="col">
                    <label for="time_end">Waktu Selesai (07:00-17:00)</label>
                    <div class="form-class">
                      <input type="time" name="time_end" id="time_end" class="@error('time_end') is-invalid @enderror" style="font-size:20px; width:12rem;" min="07:00" max="17:00" required>
                      <span class="validity"></span>
                    </div>
                    @error('time_end')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>  
                    @enderror
                  </div>  
                </div>
                <div class="row">
                  <div class="col">
                    <label for="name_event">Nama acara</label>
                    <input type="text" name="name_event" class="@error('name_event') is-invalid @enderror" id="name_event">
                    @error('name_event')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>  
                    @enderror
                  </div>
                  <div class="col">
                    <label for="name_teacher">Nama pengawas</label>
                    <input type="text" name="name_teacher" class="@error('name_teacher') is-invalid @enderror" id="name_teacher" autocomplete="off">
                    @error('name_teacher')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>  
                    @enderror
                  </div>
                </div>
              </div>

              <h1 class="text-center mt-5">Fasilitas Pendukung</h1>
              <div class="container">
                <div class="row facility">
                    <div class="col ">
                        <label for="speaker">Speaker</label>
                        <input type="checkbox" name="speaker" id="speaker" style="width:3rem">
                    </div>
                    <div class="col">
                        <label for="proyektor">Proyektor</label>
                        <input type="checkbox" name="proyektor" id="proyektor" style="width:3rem">
                    </div>
                    <div class="col">
                        <label for="bangku">Bangku</label>
                        <input type="number" name="bangku" id="bangku" min="1" value="1" style="width:3rem"">
                    </div>
                    <div class="row">
                      <div class="col">
                        <input type="submit" value="Booking Now" class="booking">
                      </div>
                    </div>
                </div>
              </div>
        </form>
      </div>

      {{-- Jadwal booking --}}
      <div class="container" style="margin-top: 4rem">
        <h1 class="text-center mb-4">Jadwal yang sudah dibooking</h1>
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">Nama Acara</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Waktu</th>
            </tr>
          </thead>
          <tbody>
            @foreach($schedules as $schedule)
            <tr>
              <td>{{ $schedule->full_name }}</td>
              <td>{{ $schedule->name_event }}</td>
              <td>{{ date('d, M  Y', strtotime($schedule->date)) }}</td>
              <td>{{ date('H:i', strtotime($schedule->time_start))  }} - {{ date('H:i', strtotime($schedule->time_end)) }}</td>
            </tr>
            @endforeach
          </tbody>
          {{ $schedules->links() }}
        </table>
      </div>

      <script>
      const date = document.querySelector('#date');
      const getDate = new Date;
      const formattedDate = `${getDate.getFullYear()}-${getDate.getMonth() < 10 ? '0' : ''}${getDate.getMonth()}-${getDate.getDate() < 10 ? '0' : ''}${getDate.getDate()+1}`
      date.value = formattedDate;
      date.min = formattedDate;
    </script>
@endsection