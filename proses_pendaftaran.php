<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "db_IT1_Bima_19";

$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$nama_pengunjung = $_POST ['nama_pengunjung'];
$nama_panggilan = $_POST ['nama_panggilan'];
$tempat_lahir = $_POST['tempat_lahir'];
$jurusan = $_POST ['jurusan'];
$alamat = $_POST ['alamat'];
$kelamin = $_POST ['kelamin'];
$asal_sekolah = $_POST ['asal_sekolah'];
$nilai = $_POST ['nilai'];

echo '<style>
        body {
            background-color: #0043c8;
        }
        .Tinput {
            background-color: white;
        }
        .main {
            background-color: rgb(142, 142, 142);
            border-radius: 10px;
            width:30%;
            height:auto;
            position:relative;
            align-self:center;
            align-items: center;
            margin:auto;
            top:200px;
            box-shadow: 0 8px 8px 0 gray, 0 8px 30px 0 rgb(88, 88, 88);
        }
        .title {
            background-color: orange;
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            margin:0px;
            width:auto;
            height:auto;
            text-align: center;
            padding:3px;
        }
        .footer {
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            margin:0px;
            width:auto;
            height:auto;
            text-align: center;
            padding:0.5px;
        }
        .organize {
            padding:20px;
        }
        .Tinput {
            border: 0;
            position:relative;
        }
        .Sbutton {
            border: 0;
            border-radius:22px;
            position:relative;
            color: rgb(0, 0, 0);
            background-color: rgb(255, 255, 255);
            width:100%;
            margin-top:10px;
        }
      </style>
      <body>
        <div class="main">
          <div class="title">
            <h2>Form Pendaftaran</h2>
            <p>Connected successfully to ' . $db . '</p>
          </div>
          <div style="padding:10px">
            <table style="margin:auto">
              <tr>
              <th colspan="2"><h2>Pendaftaran Siswa SMA Kanisius</h2>
              </th>
              </tr>
              
              <tr>
              <td> Nama Lengkap </td>
              <td>' . $nama_pengunjung . '</td>
              </tr>

              <tr>
              <td> Nama Panggilan </td>
              <td>' . $nama_panggilan . '</td>
              </tr>

              <tr>
              <td> Tempat Lahir </td>
              <td>' . $tempat_lahir . '</td>
              </tr>

              <tr>
              <td> Jurusan </td>
              <td>' . $jurusan . '</td>
              </tr>

              <tr>
              <td> Alamat Rumah </td>
              <td>' . $alamat . '</td>
              </tr>

              <tr>
              <td> Jenis Kelamin </td>
              <td>' . $kelamin . '</td>
              </tr>

              <tr>
              <td> Asal Sekolah </td>
              <td>' . $asal_sekolah . '</td>
              </tr>

              <tr>
              <td> Nilai UAN </td>
              <td>' . $nilai . '</td>
              </tr>
            </table>
          </div>
          <div class="footer">
            <h5>Made by Maheswara Binmasena Tedja</h5>
          </div>
        </div>
      </body>
      ';

$insert = "INSERT INTO tb_IT1_Bima_19 (pengunjung, panggilan, lahir, jurus, rumah, kelamin, asal, UAN)
VALUES ('" . $nama_pengunjung . "','" . $nama_panggilan . "','" . $tempat_lahir . "','" . $jurusan . "','" . $alamat . "','" . $kelamin . "','" . $asal_sekolah . "','" . $nilai . "')";

if (mysqli_query($conn, $insert)) {
    echo "Data saved"; 
} 
else {
    echo "Error with saving data" . mysqli_error($conn);
}
mysqli_close($conn);
?>