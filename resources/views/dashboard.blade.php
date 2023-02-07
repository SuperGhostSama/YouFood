<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<x-app-layout>
    <div class="container">
        <!-- STATISTIC CARDS -->
        <div class="row m-5 flex-wrap justify-content-center ">
            <div class="col-xl-3 col-sm-6  mb-4">
            <div class="card border-3">
                <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                    <div class="numbers">
                        <p class="mb-0 fw-bold">Menu</p>
                        <h5 class="mb-0">
                        14
                        </h5>
                    </div>
                    </div>
                    <div class="col-4">
                        <div class="icon ms-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file align-text-bottom" aria-hidden="true">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                <polyline points="13 2 13 9 20 9"></polyline>
                            </svg>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-sm-6  mb-4">
            <div class="card border-3">
                <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                    <div class="numbers">
                        <p class="mb-0 fw-bold">Admins</p>
                        <h5 class=" mb-0">
                        20000
                        </h5>
                    </div>
                    </div>
                    <div class="col-4 text-end">
                    <div class="icon ms-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users align-text-bottom" aria-hidden="true">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        
        <div class="d-flex justify-content-end">
            <a class="btn btn-success" href="{{ route('menus.create') }}"> + Create New Product</a>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="pt-5">
            <table class="table table-bordered bg-white border border-2">
                <tr>
                    <th>id</th>
                    <th>Menu</th>
                    <th>Day</th>
                    <th>Description</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($menus as $menu)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $menu->menu }}</td>
                    <td>{{ $menu->day }}</td>
                    <td>{{ $menu->description }}</td>
                    <td>
                        <form action="{{ route('menus.destroy',$menu->id) }}" method="POST">
           
                            <a class="btn btn-info" href="{{ route('menus.show',$menu->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('menus.edit',$menu->id) }}">Edit</a>
    
                            
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" type="submit" style="background-color: red">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $menus->links() !!}
        </div>
    </div>
   
</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>