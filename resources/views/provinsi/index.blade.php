<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Provinsi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>test</h1>
    <a href="{{url('provinsi/create')}}" type="button" class="btn btn-primary">Add data</a>
    <table class="table">
    <thead>
        <tr>
          <th scope="col">no</th>
          <th scope="col">Kode</th>
          <th scope="col">Nama Provinsi</th>
          <th scope="col">Active</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
    @foreach ( $data as $item)
           
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->kode}}</td>
            <td>{{$item->nama_provinsi}}</td>
            <td>
                <input type="checkbox" id="provinsi" name="provinsi">
            </td>
            <td>
                
                <a href="{{url('provinsi/'.$item->kode.'/edit')}}" type="button" class="btn btn-warning">edit</a>
                <form onsubmit="return confirm('delete data?')" action="{{url('provinsi/'.$item->kode)}}" method="POST" class="d-inline">
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