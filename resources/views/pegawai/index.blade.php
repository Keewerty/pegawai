<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kelurahan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>test</h1>
    <a href="{{url('kelurahan/create')}}" type="button" class="btn btn-primary">Add data</a>
    <table class="table">
    <thead>
        <tr>
          <th scope="col">no</th>
          <th scope="col">Nama Pegawai</th>
          <th scope="col">Tempat Lahir</th>
          <th scope="col">Tgl. Lahir</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Agama</th>
          <th scope="col">Alamat</th>
          <th scope="col">kelurahan</th>
          <th scope="col">kecamatan</th>
          <th scope="col">Provinsi</th>
          <th scope="col">Active</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
    @foreach ( $data as $item)
           
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->kode}}</td>
            <td>{{$item->nama_kelurahan}}</td>
            <td>{{$item->id_kecamatan}}</td>
            <td>
                <input type="checkbox" id="kelurahan" name="kelurahan">
            </td>
            <td>
                
                <a href="{{url('kelurahan/'.$item->kode.'/edit')}}" type="button" class="btn btn-warning">edit</a>
                <form onsubmit="return confirm('delete data?')" action="{{url('kelurahan/'.$item->kode)}}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </td>
          </tr>
          <tr>
        
    @endforeach
</tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>