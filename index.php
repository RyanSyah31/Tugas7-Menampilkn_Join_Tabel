<html>
   <head>
      <title>Menampilkan Data Tabel MySQL Dengan mysqli_fetch_array</title>
      <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
      </style>
   </head>
   <body>



 <h3>Tabel Barang (mysqli_fetch_row)</h3>
      <table>
         <thead>
            <tr>
               <th>ID BARANG</th>
               <th>NAMA BARANG</th>
               <th>HARGA BARANG</th>

            </tr>
         </thead>
         <?php
          include 'koneksi.php';     
            $sql = 'SELECT  * FROM barang';
            $query = mysqli_query($koneksi, $sql);    
            while ($row = mysqli_fetch_array($query))
            {
               ?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><?php echo $row[2] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>




       <h3>Tabel Pembeli (mysqli_fetch_row)</h3>
      <table>
         <thead>
            <tr>
            <th>ID PEMBELI</th>
            <th>NAMA PEMBELI</th>
              

            </tr>
         </thead>
         <?php
          include 'koneksi.php';     
            $sql = 'SELECT  * FROM pembeli';
            $query = mysqli_query($koneksi, $sql);    
            while ($row = mysqli_fetch_array($query))
            {
               ?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
              
             
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>



      <h3>Tabel Transaksi (mysqli_fetch_array)</h3>
      <table>
         <thead>
            <tr>

               <th>ID FAKTUR</th>
               <th>ID BARANG</th>
               <th>ID PEMBELI</th>
               <th>TANGGAL FAKTUR</th>
               <th>TANGGAL PEMBELIAN</th>

            
            </tr>
         </thead>
           <?php
          include 'koneksi.php';     
            $sql = 'SELECT  * FROM transaksi';
            $query = mysqli_query($koneksi, $sql);    
            while ($row = mysqli_fetch_array($query))
            {
               ?>
         <tbody>
            <tr>
       
               <td><?php echo $row['id_faktur'] ?></td>
               <td><?php echo $row['id_barang'] ?></td>
               <td><?php echo $row['id_pembeli'] ?></td>
               <td><?php echo $row['tanggal_faktur'] ?></td>
               <td><?php echo $row['tanggal_pembelian'] ?></td>
             
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>


            <h3>Inner Join   (mysqli_fetch_array)</h3>
      <table>
         <thead>
            <tr>

               <th>ID Faktur</th>
               <th>NAMA BARANG</th>
               <th>NAMA PEMBELI</th>
               <th>TANGGAL FAKTUR</th>
               <th>TANGGAL PEMEBELI</th>
            
            </tr>
         </thead>
           <?php
          include 'koneksi.php';     
            $sql = 'SELECT id_faktur,nama_barang,nama_pembeli,tanggal_faktur,tanggal_pembelian FROM transaksi RIGHT OUTER JOIN barang on transaksi.id_barang=barang.id_barang RIGHT OUTER JOIN pembeli ON transaksi.id_pembeli=pembeli.id_pembeli';
            $query = mysqli_query($koneksi, $sql);    
            while ($row = mysqli_fetch_array($query))
            {
               ?>
         <tbody>
            <tr>
       
               <td><?php echo $row['id_faktur'] ?></td>
               <td><?php echo $row['nama_barang'] ?></td>
               <td><?php echo $row['nama_pembeli'] ?></td>
                <td><?php echo $row['tanggal_faktur'] ?></td>
                <td><?php echo $row['tanggal_pembelian'] ?></td>
             
             
            </tr>
         </tbody>
         <?php
            }
            ?>
    

   </body>
</html>