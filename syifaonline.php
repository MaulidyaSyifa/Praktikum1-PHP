<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <style>
      .tengah{
      position: absolute;
      margin-top: -100px;
      margin-left: -200px;
      left: 50%;
      top: 50%;
      width: 750px;
      height: 350px;
      background-color: #ffb8b8;
      }
  </style>
</head>
<body>
<div class="container">
  <div align="center" class="tengah">
    <form action="syifaproses.php" method = "post">

      <!-- Form Name -->
        <legend>Form Belanja Online</legend>

      <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Nama</label>  
          <div class="col-md-4">
          <input id="Nama" name="Nama" type="text" placeholder="Nama" class="form-control input-md">
            
          </div>
        </div>

      <!-- Multiple Radios (inline) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="radios">Pilihan Produk</label>
          <div class="col-md-4"> 
            <label class="radio-inline" for="radios-0">
              <input type="radio" name="radios" id="radios-0" value="Tv" checked="checked">
              Tv
            </label> 
            <label class="radio-inline" for="radios-1">
              <input type="radio" name="radios" id="radios-1" value="Laptop">
              Laptop
            </label> 
            <label class="radio-inline" for="radios-2">
              <input type="radio" name="radios" id="radios-2" value="SmartPhone">
              SmartPhone
            </label>
          </div>
        </div>

      <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Jumlah Produk</label>  
          <div class="col-md-4">
          <input id="Jumlah" name="Jumlah" type="text" placeholder="Jumlah Produk" class="form-control input-md">
            
          </div>
        </div>

      <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button id="Kirim" name="kirim" class="btn btn-success">Kirim</button>
          </div>
        </div>
    </form>
  </div>
</div>
  <div class="col-sm-4">
    <div class="container2">
    <ul class="list-group">
        <li class="list-group-item active" aria-current="true">Daftar Harga</li>
        <li class="list-group-item">TV : Rp.4.200.000</li>
        <li class="list-group-item">Laptop : Rp.6.500.000</li>
        <li class="list-group-item">SmartPhone : Rp.4.800.000</li>
        <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Sewaktu Waktu</li>
    </ul>
    </div>
</body>
</html>
