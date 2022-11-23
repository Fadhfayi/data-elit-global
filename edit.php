<!doctype html>

<?php
include 'koneksi.php';
$sql=mysqli_query($koneksi,"SELECT* from syllabus where id='$_GET[id]'");
$data=mysqli_fetch_array($sql);
?>
<h3>List Rencana<h3>
<form action="" method="post">
    <table>
        <tr>
            <td width="130">id</td>
            <td><input type="text" name="id" value="<?php echo $data['id'];?>"></td>
        </tr>
        <tr>
            <td>year</td>
            <td><input type="text" name="year" value="<?php echo $data['year'];?>"></td>
        </tr>
        <tr>
            <td>month</td>
            <td><input type="text" name="month" value="<?php echo $data['month'];?>"></td>
        </tr>
        <tr>
            <td>week</td>
            <td><input type="text" name="week" value="<?php echo $data['week'];?>"></td>
        </tr>
        <tr>
            <td>date</td>
            <td><input type="text" name="date" value="<?php echo $data['date'];?>"></td>
        </tr>
        <tr>
            <td>mon</td>
            <td><input type="text" name="mon" value="<?php echo $data['mon'];?>"></td>
        </tr>
        <tr>
            <td>tue</td>
            <td><input type="text" name="tue" value="<?php echo $data['tue'];?>"></td>
        </tr>
        <tr>
            <td>wed</td>
            <td><input type="text" name="wed" value="<?php echo $data['wed'];?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="proses"></td>
        </tr>
    </table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"UPDATE syllabus set
  
    year='$_POST[year]',
    month='$_POST[month]',
    week='$_POST[week]',
    date='$_POST[date]',
    mon='$_POST[mon]',
    tue='$_POST[tue]',
    wed='$_POST[wed]'
where   id='$_GET[id]'");
   



    echo "Data baru telah tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='index.php'>";
}
?>
