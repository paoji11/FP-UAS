<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token() }}">
    <style>
        table.static{
            position: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>Cetak Data Kendaraan</title>
</head>
<body>
        <div>
            <p align="center"><b>Laporan Data Kendaraan</b></p>
            <table class="static" align="center" rules"all" border="1px" style="width: 95%">
                <tr>
                    <th>No</th>
                    <th>Gambar Kendaraan</th>
                    <th>Plat</th>
                    <th>Merk Kendaraan</th>
                    <th>Tipe Kendaraan</th>
                    
                
                </tr>  
                @php
                $nomor=1;
            @endphp
                @foreach ($bukus as $buku)

                <tr>
                    <td scope="row">
                             {{$nomor++}}    
                    </td>
                    <td>
                        <img src="{{$buku -> gambar}}" height="80px" width="100px" alt="" srcset="">
                    </td>
                    <td>{{$buku -> plat}}</td>
                    <td>{{$buku -> merk_kendaraan}}</td>
                    <td>{{$buku -> tipe_kendaraan}}</td>
                </tr>   

                @endforeach      
            
            </table>
        
        
        </div>
        <script type="text/javascript">
            window.print();
        </script>
    
</body>
</html>