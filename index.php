<!DOCTYPE html>
<html lang="en">

<head>

  <script>
    function LoadFile(event) {
      var file = event.target.files[0];
      var reader = new FileReader();
      reader.onload = function(e) {
        console.log(e.target.result);
        var fileData = e.target.result.substr(e.target.result.indexOf(",") + 1);
        var mimeTypeStart = e.target.result.indexOf("data:") + 5;
        var mimeTypeEnd = e.target.result.indexOf(";");
        var mimeType = e.target.result.substr(mimeTypeStart, mimeTypeEnd - mimeTypeStart);
        var fileName = file.name;
        document.getElementById("fileData").value = fileData;
        document.getElementById("mimeType").value = mimeType;
        document.getElementById("fileName").value = fileName;
      };
      reader.readAsDataURL(file);
    }
  </script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Coming Soon - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/coming-soon.min.css" rel="stylesheet">

</head>

<body>

  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="mp4/bg.mp4" type="video/mp4">
  </video>

  <div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto">
          <div class="masthead-content text-white py-5 py-md-0">
            <h1 class="mb-5">GreenMoluccas </h1>
            <div class="alert alert-success alert-dismissible fade show d-none my-alert" role=" alert">
              <strong>Success</strong> Berhasil Mengirimkan Data.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?var url = getUrl();?>
            <form class="form-signin" method="post" name="laporan-mingguan-dan-bulanan" actio>
              <center>
                <h2 class="form-signin-heading" style="font-family: ariel;">Laporan Bulanan dan Mingguan</h2>
              </center>

              <!-- <div class='alert alert-danger'><strong>Info : Telah dilakukan pembersihan User, untuk dapat masuk silahkan hubungi <a href="http://fb.me/rizal.ofdraw" title="Hu bungi Admin">Admin</a>.<br />Mohon maaf atas ketidaknyamanan ini, Terimakasih.</strong></div>
        <div class='alert alert-success'>
        <strong>Untuk sekedar melihat-lihat Anda dapat menggunakan akun sementara :<br />
        User : siswa@siswa.siswa <br />
        Pass : siswa
        </strong>
        </div> -->
              <?php
              if (isset($_GET['log'])) {
                if ($_GET['log'] == 2) {
                  echo "<div class='alert alert-danger'><strong>Periksa kembali email & katasandi Anda!</strong></div>";
                }
              }
              ?>
              <label for="inputEmail" class="sr-only">Nama</label>
              <input type="nama" name="nama" id="nama" class="form-control" placeholder="Masukan Nama" required="" autofocus>
              <br>
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus>
              <br>
              <h4 class="forform-signin-heading" style="font-family: ariel;">Jenis Laporan</h4>
              <input type="checkbox" id="telepon" name="jenis_laporan" id="mingguan" value="mingguan">
              <label name="jenis_laporan" class="form-check-label" for="jenis_laporan">
                Mingguan
              </label>
              <input type="checkbox" id="telepon" name="jenis_laporan" id="bulanan" value="bulanan">
              <label name="jenis_laporan" class="form-check-label" for="jenis_laporan">
                Bulanan
              </label>


              <br>
              <br>
              <div>
                <h4 class="forform-signin-heading" style="font-family: ariel;">Pilih Devisi & Masukan File Laporan</h4>
                <select style="margin-bottom: 20px;" id="country" name="devisi">
                  <option>Admin</option>
                  <option>Socio Enterprise</option>
              </div>
              <div>

                <input type="file" name="file" onchange="LoadFile(event)" />
                <input type="hidden" id="fileData" name="fileData" />
                <input type="hidden" id="mimeType" name="mimeType" />
                <input type="hidden" id="fileName" name="fileName" />
              </div>
              <br>

              <button class="btn btn-lg btn-primary btn-kirim" type="submit" name="login" value="Kirim">kirim</button>
              <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>
            </form>
            <p class="mb-5">We're working hard to finish the development of this site. Our target launch date is
              <strong>January 2021</strong>! Sign up for updates using the form below!
            </p>
            <div class="input-group input-group-newsletter">
              <input type="email" class="form-control" placeholder="Enter email..." aria-label="Enter email..." aria-describedby="submit-button">
              <div class="input-group-append">
                <button class="btn btn-secondary" type="button" id="submit-button">Notify Me!</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="social-icons">
    <ul class="list-unstyled text-center mb-0">
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
    </ul>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/coming-soon.min.js"></script>

  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbxF8BdrXAxzSWMAhMbzGAXh4ztC0g0pLxkt-TXxy4MjpyntGTFDWtlS1ud7kJYZKpq53Q/exec'
    const form = document.forms['laporan-mingguan-dan-bulanan'];
    const btnKirim = document.querySelector('.btn-kirim');
    const btnLoading = document.querySelector('.btn-loading');
    const myAlert = document.querySelector('.my-alert');
    form.addEventListener('submit', e => {
      e.preventDefault()
      //ketika tombol submit di klik
      // tampilkan tombol loading, hilangkn tombol kirim
      btnLoading.classList.toggle('d-none');
      btnKirim.classList.toggle('d-none');
      fetch(scriptURL, {
          method: 'POST',
          body: new FormData(form)
        })
        .then(response => {
          // tampilkan tombol Kirim, hilangkn tombol Loading
          btnLoading.classList.toggle('d-none');
          btnKirim.classList.toggle('d-none');
          //tampilkan my alert
          myAlert.classList.toggle('d-none');
          //reset formnyat
          form.reset();
          console.log('Success!', response)
        })
        .catch(error => console.error('Error!', error.message))
    })
  </script>
</body>

</html>