<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


<section id="gallery">
    <div class="container mt-3">
        <div class="d-flex justify-content-end">
            <a class="btn btn-success" href="{{ route('menus.index') }}"><- Return</a>
        </div>
      <div class="row justify-content-center">
            <div class="col-lg-4 mb-4 mt-2">
                <div class="card">
                <img src="../../../image/Menu.jpg" alt="MenuImage" class="card-img-top">{{-- image size 640x391 --}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $menu->menu }}</h5>
                        <p class="card-text">{{ $menu->description }}</p>
                        <span class="badge text-bg-primary">{{ $menu->day }}</span>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4 mb-4">
                <div class="card">
                <img src="../../../image/Menu.jpg" alt="MenuImage" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $menu->menu }}</h5>
                        <p class="card-text">{{ $menu->description }}</p>
                        <span class="badge text-bg-primary">{{ $menu->day }}</span>
                    </div>
                </div>
            </div> --}}

    </div>
  </div>
  </section>
  




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>