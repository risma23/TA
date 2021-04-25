<body>
<h1 align="center"> ABSENSI PEGAWAI</h1>
<a href="{{url('/tampilpegawaiabsen/tambah')}}"> TAMBAH </a>
    <table border="1" width="600px" align="center">
       <thead>
       <tr>
           <th>No</th>
           <th>JAM</th>
           <th>HARI</th>
           <th>BULAN</th>
           <th>TAHUN</th>
           <th>JUMLAH</th>
           <th>ACTION</th>
       </tr>
       </thead>

       <tbody>
       <?php
       $no=1;
       ?>
       @foreach($pegawaiabsensi as $p)
       <tr>
           <td>{{$no++}}</td>
           <td>
             {{$p->jam_abs}}
           </td>
           <td>
             {{$p->hari_abs}}
           </td>
           <td>
              {{$p->bulan_abs}}
           </td>
           <td>
              {{$p->tahun_abs}}
           </td>
           <td>
              {{$p->jumlah_abs}}
           </td>
           <td>
              <button class="btn btn-sm btn-primary"> <a href="{{url('/tampilpegawaiabsen/edit')}}/{{$p->id}}"
              class="green" title="Edit"> EDIT</a>
              </button>

              <button class="btn btn-sm btn-primary"> <a href="{{url('/tampilpegawaiabsen/hapus')}}/{{$p->id}}"
              class="red" title="Edit"> HAPUS</a>
              </button>
            </td>
       </tr>
       @endforeach
</tbody>

</table>

</body>
