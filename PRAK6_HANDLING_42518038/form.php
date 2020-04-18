<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.poliupg.ac.id/commons/apple-touch-icon.png">

    <title>FORM</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
  </head>

  <body class="bg-soft">
    <nav class="navbar navbar-light bg-light">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <img src="https://www.poliupg.ac.id/commons/apple-touch-icon.png" width="50" height="50" class="d-inline-block align-top" alt="">
    <div class="container">
    <a class="navbar-brand" href="#">M. IRZHAN SYAH IMRAN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    </div>
    </nav>
    </nav><br><br><br>
        <div class="col-md-8 order-md-1 container">
          <h1 class="mb-3">BIODATA</h1>
          <form class="needs-validation" id="formku" name="formku" action="filetujuan.php" method="POST" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="namadepan">Nama Depan</label> 
                <input type="text" name="namadepan" class="form-control" id="namadepan" placeholder="" value="" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="namabelakang">Nama Belakang</label>
                <input type="text" name="namabelakang" class="form-control" id="namabelakang" placeholder="" value="" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="namapanggilan">Nama Panggilan</label>
              <div class="input-group">
                <input type="text" name="namapanggilan" class="form-control" id="namapanggilan" placeholder="" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" name="email" class="form-control" id="email" placeholder="saya@contoh.com">
            </div>

            <div class="mb-3">
              <label for="alamat">Alamat</label>
              <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Jalan Sesama 123" required>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
              <label for="asalnegara">Asal Negara</label>
                <select class="custom-select d-block w-100" name="asalnegara" id="asalnegara">
                  <option value="">Pilih...</option>
                  <option>Indonesia</option>
                  <option>Malaysia</option>
                  <option>Singapura</option>
                  <option>Thailand</option>
                  <option>Vietnam</option>
                  <option>Kamboja</option>
                  <option>Laos</option>
                  <option>Brunei Darussalam</option>
                  <option>Timor Leste</option>
                </select>
              </div>
              <div class="col-md-4 mb-3">
                <label for="tempatlahir">Tempat Lahir</label>
                <input class="form-control d-block w-100" name="tempatlahir" id="tempatlahir">
              </div>
              <div class="col-md-3 mb-3">
                <label for="tanggallahir">Tanggal Lahir</label>
                <input class="form-control d-block w-100" name="tanggallahir" id="tanggallahir" value="yyyymmdd">
              </div>
            </div>

            <h5 class="mb-3">Jenis Kelamin</h5>
            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="laki-laki" name="jeniskelamin" value="Laki-Laki" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="laki-laki">Laki-Laki</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="perempuan" name="jeniskelamin" value="Perempuan" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="perempuan">Perempuan</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="hobi">Hobi</label>
                <input type="text" name="hobi" class="form-control" id="hobi" placeholder="" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="telpon">No.Telpon/HP</label>
                <input type="text" name="telpon" class="form-control" id="telpon" placeholder="" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="telpon">NIM</label>
                <input type="text" name="ccnumber" class="form-control" id="cc-number" placeholder="" >
              </div>
            </div>
            <hr class="mb-4">

            <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="gambar">Upload your identity</label>
                      <input type="file" accept="image/*" name="gambarku" disabled class="form-control" id="gambarku" placeholder="">
                      <small class="text-muted">Please use valid identity</small>
                      <div class="invalid-feedback">
                        You must upload this file
                      </div>
                    </div>
              <div class="col-md-6 mb-3">
                      <label for="gambar">Upload your photo</label>
                      <input type="file" accept="image/*" name="fotoku" class="form-control" id="fotoku" placeholder="">

                      <small class="text-muted">Please use valid identity</small>
                      <div class="invalid-feedback">
                        File format in png or jpg and size no more than 2MB
                      </div>
                    </div>

            <button id="create" name="action" value="create" class="btn btn-primary btn-lg btn-block" type="submit">Create</button>
            <button id="read" name="action" value="read" class="btn btn-info btn-lg btn-block" type="submit">Read</button>
            <button id="update" name="action" value="update" class="btn btn-success btn-lg btn-block" type="submit">Update </button>
            <button id="delete" name="action" value="delete" class="btn btn-danger btn-lg btn-block" type="submit">Delete</button>
          </form>
          </br>
          <//div id="hasil"></div>
          <div class="container" id="result"></div>
      </div>
    </div>
      </br>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script type="text/javascript"></script>
    <script src="async.js"></script>
    <script>
    $("#formku").submit(kirimdata);
    $(".tresult").dataTable();
    </script>

  </body>
</html>
