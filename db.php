<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Ahmad Wahyudi</title>
</head>

<body>
    <h2>Input Pasien Covid-19</h2>
    <form class="" action="" method="post">
        <table>
            <tr>
                <td>Wilayah</td>
                <td> : </td>
                <td>
                    <select class="" name="wilayah">
                        <option value="DKI Jakarta">DKI Jakarta</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                        <option value="Banten">Banten</option>
                        <option value="Jawa Tengah">Jawa Tengah</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah Pasien Positif</td>
                <td> : </td>
                <td><input type="number" name="positif"></td>
            </tr>
            <tr>
                <td>Jumlah Pasien Dirawat</td>
                <td> : </td>
                <td><input type="number" name="dirawat"></td>
            </tr>
            <tr>
                <td>Jumlah Pasien Sembuh</td>
                <td> : </td>
                <td><input type="number" name="sembuh"></td>
            </tr>
            <tr>
                <td>Jumlah Pasien Meninggal</td>
                <td> : </td>
                <td><input type="number" name="meninggal"></td>
            </tr>
            <tr>
                <td>Operator</td>
                <td> : </td>
                <td><input type="text" name="operator"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td> : </td>
                <td><input type="text" name="nim"></td>
            </tr>
        </table> <br>
        <input type="submit" name="input" value="Simpan">
    </form>

    <br>

    <?php if (isset($_POST['input'])): ?>
    <?php echo "<center>"; ?>
    <?php echo "Data Pemantauan Covid19 wilayah ".$_POST['wilayah']."<br>"; ?>
    <?php echo "Per ". date('d M Y H:i:s')."<br>"; ?>
    <?php echo $_POST['operator']."/".$_POST['nim']."<br><br>" ?>
    <?php echo "</center>"; ?>
    <?php echo "<table border=1 width=100%>
                    <tr>
                      <td>Positif</td>
                      <td>Dirawat</td>
                      <td>Sembuh</td>
                      <td>Meninggal</td>
                    </tr>";
      ?>
    <?php echo "  <tr>
                      <td>".$_POST['positif']."</td>
                      <td>".$_POST['dirawat']."</td>
                      <td>".$_POST['sembuh']."</td>
                      <td>".$_POST['meninggal']."</td>
                    </tr>
                  </table>";
      ?>
    <?php endif; ?>

    <?php
      if(isset($_POST['operator']))
      {
        $wilayah=$_POST['wilayah'];
        $positif=$_POST['positif'];
        $dirawat=$_POST['dirawat'];
        $sembuh=$_POST['sembuh'];
        $meninggal=$_POST['meninggal'];
        $operator=$_POST['operator'];
        $nim=$_POST['nim'];
        $fp = fopen('db.html', 'a');
        fwrite($fp, $wilayah);
        fwrite($fp, $positif);
        fwrite($fp, $dirawat);
        fwrite($fp, $sembuh);
        fwrite($fp, $meninggal);
        fwrite($fp, $operator);
        fwrite($fp, $nim);
        fclose($fp);
      }
    ?>

</body>

</html>