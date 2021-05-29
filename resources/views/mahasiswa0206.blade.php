<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Mahasiswa</title>
  <style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 0;
      border: 1px solid #ddd;
    }

    thead {
      background-color: #f2f2f2;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .tambah {
      padding: 8px 16px;
      text-decoration: none;
    }

  </style>
</head>
<body>
  
  <div style="overflow-x: auto">
    <a href="{{route('mahasiswa.create')}}">Tambah Data</a>

    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>NBI</th>
          <th>Nama Mahasiswa</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        <?php $no = 1?>
        @foreach($mahasiswa0206 as $mhs):
        <tr>
          <td>{{$no++}}</td>
          <td>{{$mhs->nbi}}</td>
          <td>{{$mhs->nama_mhs}}</td>
          <td>
            <a href="#!">Hapus</a>
            |
            <a href="#!">Edit</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>


</body>
</html>