<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Register</h1>
                </div>
                <div class="card-body">
                   <form action="/register" method="POST">
                      @csrf
                      <div class="mb-3">
                         <label for="name" class="form-label">Username</label>
                         <input type="text" class="form-control @error ('username') is-invalid @enderror" name="username" id="username" placeholder="Yourname">
                      </div>

                      <div class="mb-3">
                         <label for="name" class="form-label">Nama</label>
                         <input type="text" class="form-control @error ('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Yourname">
                      </div>

                      <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <select class="form-select @error ('jabatan') is-invalid @enderror" aria-label="Default select example" name="jabatan">
                            <option selected>Pilih</option>
                            <option value="Kepala">Kepala</option>
                            <option value="Guru">Kolega/Sejawat</option>
                            <option value="Siswa">Siswa</option>
                          </select>
                      </div>

                      <div class="mb-3">
                        <label for="institusi" class="form-label">Institusi</label>
                        <select class="form-select  @error ('institusi') is-invalid @enderror" aria-label="Default select example" name="institusi">
                            <option selected>Pilih</option>
                            <option value="SmknCompreng">Smkn Compreng</option>
                            <option value="SmknCimahi">Smkn Cimahi</option>
                            <option value="SmknPadalarang">Smkn Padalarang</option>
                          </select>
                      </div>

                      <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <select class="form-select  @error ('kota') is-invalid @enderror" aria-label="Default select example" name="kota">
                            <option selected>Pilih</option>
                            <option value="Subang">Subang</option>
                            <option value="Bandung">Bandung</option>
                            <option value="Cimahi">Cimahi</option>
                          </select>
                      </div>

                      <div class="mb-3">
                         <label for="email" class="form-label">Email</label>
                         <input type="email" class="form-control  @error ('email') is-invalid @enderror" name="email" id="email" placeholder="Your email">
                      </div>

                      <div class="mb-3">
                         <label for="nohp" class="form-label">No Handpone</label>
                         <input type="number" class="form-control  @error ('nohp') is-invalid @enderror" name="nohp" id="nohp" placeholder="Number">
                      </div>

                      <div class="mb-3">
                         <label for="password" class="form-label">Password</label>
                         <input type="password" class="form-control  @error ('password') is-invalid @enderror" name="password" id="password" placeholder="password">
                      </div>

                      <div class="mb-3">
                        <div class="d-grid">
                            <button class="btn btn-primary">Register</button>   
                        </div>
                      </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</html>
</body>