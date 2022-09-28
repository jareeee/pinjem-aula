@extends('layout.layout')

@section('content')
    <h1 class="text-center mt-5 mb-2 fw-bolder">Booking Form</h1>
    <div class="box-form">
        <form action="{{ route('booking-post') }}" method="post">
            @csrf
            <div class="container mt-4">
                <div class="row">
                  <div class="col">
                    <label for="full_name">Nama lengkap</label>
                    <input type="text" name="full_name" id="full_name">
                  </div>
                  <div class="col">
                    <label for="date">Tanggal peminjaman</label>
                    <div class="date-class">
                      <input type="text" name="date" id="datepicker" class="date">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="no_telepon">Nomer telepon</label>
                    <input type="tel" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" name="no_telepon" id="no_telepon" style="width:31.8rem;">
                  </div>
                  <div class="col" style="margin-left: 1.78rem; margin-right: 3rem;">
                    <label for="time_start">Waktu mulai (07:00-17:00)</label>
                    <input type="time" style="font-size:19px; width:12rem" name="time_start" id="time_start" min="07:00" max="17:00" required>
                    <span class="validity"></span>
                  </div>
                  <div class="col">
                    <label for="time_end">Waktu Selesai (07:00-17:00)</label>
                    <input type="time" name="time_end" id="time_end" style="font-size:20px; width:13rem;" min="07:00" max="17:00" required>
                    <span class="validity"></span>
                  </div>  
                </div>
                <div class="row">
                  <div class="col">
                    <label for="name_event">Nama acara</label>
                    <input type="text" name="name_event" id="name_event">
                  </div>
                  <div class="col">
                    <label for="name_teacher">Nama pengawas</label>
                    <input type="text" name="name_teacher" id="name_teacher">
                  </div>
                </div>
              </div>

              <h2 class="fw-bolder text-center mt-5">Fasilitas Pendukung</h2>
              <div class="container">
                <div class="row facility">
                    <div class="col ">
                        <label for="speaker">Speaker</label>
                        <input type="number" name="speaker" id="speaker" min="1" value="1" style="width:3rem">
                    </div>
                    <div class="col">
                        <label for="proyektor">Proyektor</label>
                        <input type="number" name="proyektor" id="proyektor" min="1" value="1" style="width:3rem">
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
      $( "#datepicker" ).datepicker({
        dateFormat : 'dd MM yy',
        changeMonth : true,
        changeYear : true,
        showOn : 'both',
        buttonText : '<i class="bi bi-calendar3"></i>'
      });
    </script>
@endsection