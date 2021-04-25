<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH</title>
</head>
<body>
	<h3>Pegawai Absensi</h3>
 
	<a href="{{url('/tampilpegawaiabsen')}}"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="{{url('/tampilpegawaiabsen/store')}}" method="post">
		{{ csrf_field() }}
		JAM <input type="text" name="jam_abs" required="required"> <br/>
		HARI <input type="text" name="hari_abs" required="required"> <br/>
		BULAN <input type="text" name="bulan_abs" required="required"> <br/>
		TAHUN <input type="number" name="tahun_abs" required="required"> <br/>
		JUMLAH <input type="number" name="jumlah_abs" required="required"> <br/>
		<input type="submit" value="submit"value="Simpan Data">
	</form>
 
</body>
</html>