<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body style=>
  <main>
  <div class="container" style="color: red">

    <header style="background-color: red" class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="20" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span style="color: white" class="fs-4">PARTAI ABADI</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" style="color: white" class="nav-link" aria-current="page">BERANDA</a></li>
        <li class="nav-item"><a href="#" style="color: white" class="nav-link">FITUR</a></li>
        <li class="nav-item"><a href="#" style="color: white" class="nav-link">DAFTAR HARGA</a></li>
        <li class="nav-item"><a href="#" style="color: white" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" style="color: white" class="nav-link">TENTANG KAMI</a></li>
      </ul>
    </header>
  </div>
  <div class="container">
    <table class="table">
      <h2> DATA ELIT GLOBAL </h2>
      <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="image\LOGO.png" alt="logo" width="25%">
    <h1 class="display-5 fw-bold"></h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Menerima penjualan data rakyat dengan sukarela demi kemalangan rakyat.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button  type="button" class="btn btn-danger btn-lg px-4 gap-3"> <a href='Insert.php?id=$row[id]' style="color: white;text-decoration:none" >MASUK DATA</a></button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">DAFTAR HUTANG NEGARA</button>
      </div>
    </div>
  </div>
  <thead class="thead-dark">
    <tr>
      <th scope="col">menu</th>
      <th scope="col">#</th>
      <th scope="col">year</th>
      <th scope="col">month</th>
      <th scope="col">date</th>
      <th scope="col">mon</th>
      <th scope="col">tue</th>
      <th scope="col">wed</th>      
    </tr>
  </thead>
  <tbody>


<?php

include 'koneksi.php';

// Check connection
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}

$sql = "SELECT * FROM `syllabus`";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
    ?>


<?php
    echo "
    <tr>
      <td> 
          <a href=\"http://localhost/latihan/edit.php?id=" . $row["id"]. "\">
          Edit
          <a/>
          <a href='delete.php?id=$row[id]'>Delete</a>
        </td>
      <td>" . $row["id"]. "</td>
      <td>" . $row["year"]. "</td>
      <td>" . $row["month"]. "</td>
      <td>" . $row["date"]. "</td>
      <td>" . $row["mon"]. "</td>
      <td>" . $row["tue"]. "</td>
      <td>" . $row["wed"]. "</td>
    </tr>";


  }
} else {
  echo "0 results";
}
$koneksi->close();

?>


</tbody>
</table>
</div>

<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">BERANDA</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FITUR</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">HARGA</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">TENTANG KAMI</a></li>
    </ul>
    <p class="text-center text-muted">© 2022 Compayi, Inc</p>
  </footer>
</div>

</main>
</br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>