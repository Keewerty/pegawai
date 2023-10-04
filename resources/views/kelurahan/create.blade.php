<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kelurahan Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ url('kelurahan') }}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kode</label>
            <input type="text" name="kode" class="form-control" id="kode">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Nama kelurahan</label>
            <input type="text" name="nama_kelurahan" class="form-control" id="nama_kelurahan">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">id kecamatan</label>
            <input type="text" name="nama_kecamatan" class="form-control" id="id_kecamatan">
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>