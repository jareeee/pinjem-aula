@extends('dashboard.layout.layout')

@section('content')
      <div class="d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3">
        <h1 class="h2 fw-bolder">Profil</h1>
      </div>

      <div class="container d-flex flex-column align-items-center justify-content-center mt-1 profil">
        <img src="img/profil.png" alt="profil-icon" width="22%">
        @foreach($profiles as $profil)
          <h4 class="mt-4">{{ $profil->full_name }}</h4>
          <div class="row d-flex flex-column">
            <div class="col">
              <img src="img/telp-icon.png" alt="telpon-icon" width="8%">
              <input type="text" name="" id="" value="{{ $profil->no_telepon }}" readonly >
            </div>
            <div class="col">
              <img src="img/email-icon.png" alt="email-icon" width="8%">
              <input type="text" name="" id="" value="{{ $profil->email }}" readonly >
            </div>
          @endforeach
        </div>
        <h4></h4>
        </div>
      </div>

  </div>
</div>



@endsection