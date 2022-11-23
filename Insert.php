<!DOCTYPE html>
<html lang="en">
<head>
    <title>MASUKAN DATA </title>
</head>
<body>
    <h1>MASUKAN DATA</h1>
    <form action="" method="POST">
    <table>
        <tr>
            <td width="130"></td>
        
        </tr>
        <tr>
            <td>year</td>
            <td><input type="text" name="year" value=""></td>
        </tr>
        <tr>
            <td>month</td>
            <td><input type="text" name="month" value=""></td>
        </tr>
        <tr>
            <td>week</td>
            <td><input type="text" name="week" value=""></td>
        </tr>
        <tr>
            <td>date</td>
            <td><input type="text" name="date" value=""></td>
        </tr>
        <tr>
            <td>mon</td>
            <td><input type="text" name="mon" value=""></td>
        </tr>
        <tr>
            <td>tue</td>
            <td><input type="text" name="tue" value=""></td>
        </tr>
        <tr>
            <td>wed</td>
            <td><input type="text" name="wed" value=""></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="proses"></td>
        </tr>
    </table>
</form>
    <!-- script php mysql untuk menyimpan data (insert data ke database) -->
    <?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "INSERT into syllabus set  
    year='$_POST[year]',
    month='$_POST[month]',
    week='$_POST[week]',
    date='$_POST[date]',
    mon='$_POST[mon]',
    tue='$_POST[tue]',
    wed='$_POST[wed]'");

echo "Data barang baru telah tersimpan";
echo "<meta http-equiv=refresh content=1;URL='index.php'>";}

?>

</body>
</html>