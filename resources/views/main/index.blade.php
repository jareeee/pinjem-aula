@extends('layout.layout')

@section('content')
        {{-- <img src="img/aula.png" alt="aula" class="aula-img img-fluid">
    <div class="box">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae reiciendis similique ad cupiditate ex obcaecati facere itaque quidem, ullam, quaerat labore voluptate doloribus! Sed nihil rem reiciendis expedita eveniet eaque?</p>
    </div> --}}

    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="10000">
            <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" class="d-block w-100 aula-img img-fluid" alt="...">
          </div>
          <div class="carousel-item" data-interval="2000">
            <img src="https://cdn.searchenginejournal.com/wp-content/uploads/2022/06/image-search-1600-x-840-px-62c6dc4ff1eee-sej-1280x720.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://img.freepik.com/premium-photo/astronaut-outer-open-space-planet-earth-stars-provide-background-erforming-space-planet-earth-sunrise-sunset-our-home-iss-elements-this-image-furnished-by-nasa_150455-16829.jpg?w=2000Z" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
@endsection