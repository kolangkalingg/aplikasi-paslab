<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    body {
      background-image: url('img/bg2.jpeg');
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }
  </style>


</head>

<body>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center" style="height: 100vh; width:100%">
      <div class="col-md-20">
        <div class="card border-0 shadow rounded">
          <div class="card-header mb-3">
            <strong>Aplikasi - Peminjaman Alat Lab</strong>
          </div>
          <form name="kirim_data">
            <div class="card-body">
              <!-- alert -->
              <div class="alert alert-success alert-dismissible fade show alert-berhasil d-none" role="alert">
                <strong>Kirim data berhasil!</strong> Data sudah masuk ke dalam database aplikasi Paslab..
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <button type="button" class="btn btn-danger float-right" onclick="logout()">Logout</button>
              <button type="button" class="btn btn-primary float-right" id="tambahBaris">Tambah Data</button>
              <button type="button" class="btn btn-success float-right" onclick="pengembalian()">Meminjam</button>
              <table class="table" id="tabelData">
                <thead>
                  <tr>
                    <th>Tgl & waktu Pengembalian</th>
                    <th>Kelas</th>
                    <th>Nama Siswa</th>
                    <th>Alat Yang Dikembalikan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="tabelBody">
                  <tr>
                    <td>
                      <input type="datetime-local" class="form-control" id="birthdaytime" name="tgl/jam" required>
                    </td>
                    <td>
                      <select class="form-control pilihan" name="kelas" required>
                        <option value="">Pilih Kelas</option>
                        <option value="XI RPL">XI RPL</option>
                        <option value="XI MM">XI MM</option>
                        <option value="XI TKJ 1">XI TKJ 1</option>
                        <option value="XI TKJ 2">XI TKJ 2</option>
                      </select>
                    </td>
                    <td>
                      <input type="text" name="nama" class="form-control" placeholder="Nama Siswa" autocomplete="off" required>
                    </td>
                    <!-- <td>
                              <select class="form-control pilihan" name="alat">
                                <option value="">pilih alat</option>
                                <option value="proyektor">poyektor</option>
                                <option value="laptop">laptop</option>
                                <option value="keyboard">keyboard</option>
                                <option value="mouse">mouse</option>
                              </select>
                            </td> -->
                            <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="mouse" name="alat" id="flexCheckDefault" required >
                        <label class="form-check-label" for="flexCheckDefault" >
                          mouse
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="kabel lan" name="alat" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                          kabel lan
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="keyboard" name="alat" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                          keyboard
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="proyektor" name="alat" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                          proyektor
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="stopkontak" name="alat" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                          stopkontak
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="radio" name="alat" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                          radio
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="kabel usb" name="alat" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                          kabel usb
                        </label>
                      </div>
                    </td>
                    <td>
                      <input id="input" type="file" name="foto_alat">
                    </td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" name="status" value="sudah dikembalikan" id="btncheck1"
                          autocomplete="off" checked>
                        <label class="btn btn-outline-primary" for="btncheck1">Mengembalikan</label>
                      </div>
                    </td>
                    <td>
                      <a href="" class="btn btn-danger btn-remove"><span class="badge rounded-pill text-bg-danger"><i
                            class="bi bi-trash-fill"></i></span></a>
                    </td>
                  </tr>
                  <!-- Tambahkan baris sebanyak yang Anda perlukan -->
                </tbody>
              </table>
            </div>
            <div class="p-3">
              <button type="submit" class="btn btn-success btn-kirim">Kirim data</button>
              <button class="btn btn-success btn-loading d-none" type="button" disabled>
                <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                <span role="status">Loading...</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

  <!-- proses kirim data ke database -->
  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbwKUn1fLGpAMcbIBXWIqAjvtl1lgXbq5VYVFjddPFK5ug60h0eFsOYzVVTG8IbWH40/exec'
    const form = document.forms['kirim_data']
    const btnLoading = document.querySelector('.btn-loading');
    const btnKirim = document.querySelector('.btn-kirim');
    const alertBerhasil = document.querySelector('.alert-berhasil');

    form.addEventListener('submit', e => {
      e.preventDefault();

      btnLoading.classList.toggle('d-none');
      btnKirim.classList.toggle('d-none');

      fetch(scriptURL, { method: 'POST', body: new FormData(form) })
        .then(response => {
          btnLoading.classList.toggle('d-none');
          btnKirim.classList.toggle('d-none');

          alertBerhasil.classList.toggle('d-none');
          form.reset();

          console.log('Success!', response);
        })
        .catch(error => console.error('Error!', error.message))
    });
  </script>

  <script>
    function logout() {
      console.log("Berhasil logout");
      window.location.href = "index.php";
      history.pushState(null, null, "index.php");
    }
  </script>
  <script>
    function pengembalian() {
      console.log("Berhasil ke halaman peminjaman");
      window.location.href = "dashboard.php";
      history.pushState(null, null, "dashboard.php");
    }
  </script>

  <script>
    document.getElementById('tambahBaris').addEventListener('click', function () {
      var tbody = document.getElementById('tabelBody');
      var newRow = document.createElement('tr');
      var rowCount = tbody.getElementsByTagName('tr').length + 1; // Menghitung jumlah baris

      newRow.innerHTML = `
        <td>                   
          <input type="datetime-local" class="form-control" id="birthdaytime" name="jam_terlambat_${rowCount}">
        <td>
          <select class="form-control" id="pilihan" name="kelas_${rowCount}">
            <option value="">Pilih Kelas</option>
            <option value="XI RPL">XI RPL</option>
            <option value="XI MM">XI MM</option>
            <option value="XI TKJ 1">XI TKJ 1</option>
            <option value="XI TKJ 2">XI TKJ 2</option>
          </select> 
        <td>
            <input type="text" class="form-control" name="nama_${rowCount}" placeholder="Nama Siswa">
        </td>
        <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          mouse
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                          kabel lan
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                          keyboard
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                          proyektor
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                          stopkontak
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                          radio
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                          kabel usb
                        </label>
                      </div>
                    </td>
                    <td>
                      <input id="input" type="file" name="foto_alat">
                    </td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" name="status" value="Meminjam" id="btncheck1"
                          autocomplete="off" checked>
                        <label class="btn btn-outline-primary" for="btncheck1">Mengembalikan</label>
                      </div>
                    </td>
        </td>
        <td>
          <a href="" class="btn btn-danger btn-remove"><span class="badge rounded-pill text-bg-danger"><i class="bi bi-trash-fill"></i></span></a>
        </td>
        `;

      tbody.appendChild(newRow);
    });
    document.getElementById('tabelBody').addEventListener('click', function (e) {
      if (e.target.classList.contains('btn-remove')) {
        e.target.parentElement.parentElement.remove();
      }
    });    
  </script>
</body>

</html>