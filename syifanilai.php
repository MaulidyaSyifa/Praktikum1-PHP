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
width: 600px;
height: 500px;
background-color: #63cdda;
}
</style>
</head><!-- CSS only -->
<body>
<div align="center" class="tengah">

<form action ="proses.php" method = "get">
<fieldset>

<!-- Form Name -->
<legend>Form Mata Kuliah</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nama Lengkap</label>  
  <div class="col-md-4">
  <input id="NamaLengkap" name="NamaLengkap" type="text" placeholder="Nama Lengkap" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">NIM</label>  
  <div class="col-md-4">
  <input id="NIM" name="NIM" type="text" placeholder="NIM" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Mata Kuliah</label>
  <div class="col-md-4">
    <select id="MataKuliah" name="MataKuliah" class="form-control">
      <option value=>Mata Kuliah</option>
      <option value="Bahasa Inggris">Bahasa Inggris 2</option>
      <option value="Statistik dan Probabilitas">Statistik dan Probabilitas</option>
      <option value="Pancasila dan Pendidikan Kewarganegaraan">Pancasila dan Pendidikan Kewarganegaraan</option>
      <option value="Keterampilan Komunikasi">Keterampilan Komunikasi</option>
      <option value="User Interface and Experience">User Interface and Experience</option>
      <option value="Jaringan Komputer">Jaringan Komputer</option>
      <option value="Basis Data">Basis Data</option>
      <option value="Pemrograman WEB 2">Pemrograman Web 2</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nilai UTS</label>  
  <div class="col-md-4">
  <input id="NilaiUTS" name="NilaiUTS" type="text" placeholder="Nilai UTS" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nilai UAS</label>  
  <div class="col-md-4">
  <input id="NilaiUAS" name="NilaiUAS" type="text" placeholder="Nilai UAS" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nilai Praktikum</label>  
  <div class="col-md-4">
  <input id="NilaiPraktikum" name="NilaiPraktikum" type="text" placeholder="Nilai Praktikum" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Kirim</button>
  </div>
</div>

</fieldset>
</form>
</div>

</body>
</html>