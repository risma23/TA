<!DOCTYPE html>
<html>

<body>
  <h3>Transaksi Gaji</h3>
 
 
  
  <br/>
  <br/>
 
  <form action="{{url('/tampilgajipegawai/store')}}" method="post">
    {{ csrf_field() }}
    NAMA <input type="text" name="nama_gaji" required="required"> <br/>
    NIP <input type="text" name="nip_gaji" required="required"> <br/>
    STATUS PEGAWAI <input type="text"  name="statuspegawai_gaji" required="required"> <br/>
    GAJI POKOK <input type="text" id="gajipokok_gaji" name="gajipokok_gaji" required="required" onkeyup="sum();" > <br/>
    BONUS TAMBAHAN <input type="text" id="bonustambahan_gaji" name="bonustambahan_gaji" required="required" onkeyup="sum();"> <br/>
    
    TOTAL<input type="text" id="total_gaji" name="total_gaji">
<script>
function sum() {
              var txtFirstNumberValue = document.getElementById('gajipokok_gaji').value;
              var txtSecondNumberValue = document.getElementById('bonustambahan_gaji').value;
  var result = parseFloat(txtFirstNumberValue) + parseFloat(txtSecondNumberValue);
              if (!isNaN(result)) {
              document.getElementById('total_gaji').value = result;
              }}
</script>;
     <br/>
         
    <input type="submit" value="submit"value="Simpan Data">
</form>
 
</body>
</html>