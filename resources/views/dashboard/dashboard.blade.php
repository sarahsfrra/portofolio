<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Admin Porto</title>
</head>
<body>
    @include('components/navbar-admin')
    <section class="container">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Foto Projek</th>
                <th scope="col">Nama Projek</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach($projeks as $projek)
                <tr>
                    <td scope="row">{{ $loop->index + 1 }}</td>
                    <td><img src="{{ $projek->link_foto }}" alt="" style="width: 100px;"></td>
                    <td>{{ $projek->nama_projek }}</td>
                    <td>{{ $projek->deskripsi }}</td>
                    <td >
                        <section class="d-flex">
                            <a href="{{ route('edit-projek', $projek->id) }}" class="btn btn-success">Edit</a>
                            <form action="{{ route('delete-projek', $projek->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </section>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </section>
</body>
</html>
