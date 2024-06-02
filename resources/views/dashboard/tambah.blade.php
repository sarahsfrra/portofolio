<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Admin Dashboard Sarah Ngok</title>
</head>
<body>
    @include('components/navbar-admin')
    <section>
        <form
            class="container my-5 card p-5"
            method="POST"
            enctype="multipart/form-data"
            action="/tambah-portofolio"
            >
            @csrf
            <div class="mb-3">
              <label for="nama_projek" class="form-label">Nama Projek</label>
              <input required type="text" class="form-control" id="nama_projek" name="nama_projek" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi Projek</label>
              <textarea
                name="deskripsi"
                id="deskripsi"
                cols="30"
                rows="10"
                class="form-control"
                required
                style="resize:none;"></textarea>
            </div>
            <div class="mb-3">
                <label for="foto_projek" class="form-label">Foto Projek</label>
                <input required type="file" name="foto_projek" class="form-control" id="foto_projek">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
</body>
</html>
