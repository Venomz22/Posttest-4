<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="css/pesan.css">
</head>
<body>
    <div class="judul">
        <h1><b>FORM PEMESANAN GAME</b></h1>
    </div>
    <div class = "drop">
        <form action = "tampilan.php" method="POST" class = "drop">
                <table>
                    <tr>
                        <td>Game yang Ingin Dipesan</td>
                        <td>:</td>
                        <td><input type="text" name="nama" placeholder= "masukkan nama"></td>
                    </tr>
                    <tr>
                        <td>Nama Anda</td>
                        <td>:</td>
                        <td><input type="number" name="umur" placeholder= "masukkan umur"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Pemesanan</td>
                        <td>:</td>
                        <td><input type="date" name="tglboking" ></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><input type="radio" name="jk" value= "Pria">cd</td>
                        <td><input type="radio" name="jk" value= "Wanita">Gdrive</td>
                    </tr>
                    <tr>
                        <td>Metode Pembayaran</td>
                        <td>:</td>
                        <td><select name= "metode" id="">
                            <option value="Cash">Cash</option>
                            <option value="Transfer">Transfer</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td  class = "input">
                        <input type="reset" name="Reset" value="Reset" class="daf">
                        </td>
                        <td colspan="2" class="input" >
                        <input type="submit" name="regis" value="Daftar" class="daf"> 
                        </td>
                    </tr>
                </table>
        </form>
        
    </div>

</body>
</html>