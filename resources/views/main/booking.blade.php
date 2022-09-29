@extends('layout.layout')

@section('content')
@if(session()->has('success'))
  <div class="alert text-center alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }} 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
    <h1 class="text-center mt-5 mb-2 fw-bolder">Booking Form</h1>
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

              <h2 class="fw-bolder text-center mt-5">Fasilitas Pendukung</h2>
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
    <script>
      const date = document.querySelector('#date');
      const getDate = new Date;
      const formattedDate = `${getDate.getFullYear()}-${getDate.getMonth() < 10 ? '0' : ''}${getDate.getMonth()}-${getDate.getDate() < 10 ? '0' : ''}${getDate.getDate()}`
      // console.log(date.getFullYear(), date.getMonth(), date.getDate());
      console.log(formattedDate);
      date.value = formattedDate;
      date.min = formattedDate;
    </script>
@endsection