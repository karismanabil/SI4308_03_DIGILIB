@extends('layouts.main')

@section('container')
<!-- konten -->
  <div class="container mt-2 mb-5">
    <h4 class="judul mt-4" style="color: #00BFFF;">Frequently Asked Question</h4>
    <br>

    <!-- Konten 1 -->
    <div class="row ">

      <div class="col">      
        <!-- card 1 -->
        <div class="card" style="width: 18rem; background-color: #E0FFFF;">
          <img src="img/caribuku.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Cara mencari buku</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et debitis exercitationem impedit vero natus rem. Totam harum voluptatem reprehenderit, cumque, exercitationem accusantium consectetur nesciunt omnis atque explicabo repellat. Sequi, voluptates?</p>
          </div>
        </div>
        <!-- endcard 1 -->
      </div>

      <div class="col order-5">
        <!-- card 2 -->
        <div class="card" style="width: 18rem; background-color: #E0FFFF;">
          <img src="img/tutorbuku.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Cara mengutip buku</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et debitis exercitationem impedit vero natus rem. Totam harum voluptatem reprehenderit, cumque, exercitationem accusantium consectetur nesciunt omnis atque explicabo repellat. Sequi, voluptates?</p>
          </div>
        </div>
        <!-- endcard 2 -->
      </div>

      <div class="col order-1">
        <!-- card 3 -->
        <div class="card" style="width: 18rem; background-color: #E0FFFF;">
          <img src="img/dendabuku.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Cara mengatasi denda agar free</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et debitis exercitationem impedit vero natus rem. Totam harum voluptatem exercitationem accusantium consectetur nesciunt omnis atque explicabo repellat. Sequi, voluptates?</p>
          </div>
        </div>
        <!-- endcard 3 -->
      </div>
    
    </div>
  
    <!-- endkonten 1 -->


<!-- end konten -->
@endsection