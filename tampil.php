<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
.table{
    border: 1px solid;
    margin-left: 6%;
    margin-right: 6%;
    text-align: center;
}
th{
  border-collapse: collapse;
  text-align: center;
  padding: 13px;
  font-size:15px;
}
.berhasil{
    text-align: center;
    color: green;
    font-size: 50px;
    font-family: 'Arial', Times, Sans-serif;
}
.berikut{
    margin-left: 6%;
    font-size: 20px;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Reservasi</title>
</head>
<body>
    <p><h2 class="berhasil">Berhasil</h2></p>
    <p align="center"><img src="assets/img/Checklist-Logo.png" alt="Logo Ceklis" width="300"></p>
    <p class="berikut">berikut <b>Data Reservasi</b></p>
    <table border="1" style="width: 90%;" class="table">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>No.Telpon</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Jumlah orang</th>
            <th>Pesan</th>
        </tr>
        <tr>
            <th><?php echo $_POST['name'];?></th>
            <th><?php echo $_POST['email'];?></th>
            <th><?php echo $_POST['phone'];?></th>
            <th><?php echo $_POST['date'];?></th>
            <th><?php echo $_POST['time'];?></th>
            <th><?php echo $_POST['people'];?></th>
            <th><?php echo $_POST['message']; ?></th>
        </tr>
    </table>
</body>
</html>