<body>
<h1 align="center"> GAJI PEGAWAI</h1>
    <table border="1" width="600px" align="center">
       <thead>
       <tr>
           <th>No</th>
           <th>NAMA</th>
           <th>NIP</th>
           <th>STATUS PEGAWAI</th>
           <th>GAJI POKOK</th>
           <th>BONUS TAMBAHAN</th>
           <th>TOTAL</th>
       </tr>
       </thead>

       <tbody>
       <?php
       $no=1;
       ?>
       @foreach($gajihonorer as $g)
       <tr>
           <td>{{$no++}}</td>
           <td>
             {{$g->nama_gaji}}
           </td>
           <td>
             {{$g->nip_gaji}}
           </td>
           <td>
              {{$g->statuspegawai_gaji}}
           </td>
           <td>
              {{$g->gajipokok_gaji}}
           </td>
           <td>
              {{$g->bonustambahan_gaji}}
           </td>
           <td>
              {{$g->total_gaji}}
           </td>
       </tr>
       @endforeach
</tbody>

</table>

</body>
