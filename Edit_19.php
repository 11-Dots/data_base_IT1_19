<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <style>
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
</head>
<body>
    <div class="main">
        <div class="title">
            <h2>Edit Data</h2>
        </div>
        <div style="padding:10px">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "db_IT1_Bima_19";

        $conn = new mysqli($servername, $username, $password, $db);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $id = $_GET['id'];
        $show = mysqli_query($conn, "SELECT * FROM tb_IT1_Bima_19 WHERE id='$id'");
        $data = mysqli_fetch_assoc($show);
        ?>
        <form method="post" action="Update_19.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table style="margin:auto">
                <tr>
                <th colspan="2"> ID <?php echo $id?></th>
                </tr>
                
                <tr>
                <td> Nama Lengkap </td>
                <td><input type="text" name="nama_pengunjung" value="<?php echo $data['pengunjung'];?>" required></td>
                </tr>

                <tr>
                <td> Nama Panggilan </td>
                <td><input type="text" name="nama_panggilan" value="<?php echo $data['panggilan'];?>" required></td>
                </tr>

                <tr>
                <td> Tempat Lahir </td>
                <td><input type="text" name="tempat_lahir" value="<?php echo $data['lahir']?>" required></td>
                </tr>

                <tr>
                <td> Jurusan </td>
                <td><select name="jurusan">
                        <option value="IPA" <?php if($data['jurus'] == 'IPA'){ echo 'selected';}?>>IPA</option>
                        <option value="IPS" <?php if($data['jurus'] == 'IPS'){ echo 'selected';}?>>IPS</option>
                    </select>
                </td>
                </tr>

                <tr>
                <td> Alamat Rumah </td>
                <td><input type="text" name="alamat" value="<?php echo $data['rumah']?>" required></td>
                </tr>

                <tr>
                <td> Jenis Kelamin </td>
                <td><input type="radio" id="laki-laki" name="kelamin" value="laki-laki" <?php if($data['kelamin'] == 'laki-laki'){ echo 'checked';}?>>
                    <label for="laki-laki">Laki-laki</label>
                    <input type="radio" id="perempuan" name="kelamin" value="perempuan" <?php if($data['kelamin'] == 'perempuan'){ echo 'checked';}?>>
                    <label for="perempuan">Perempuan</label>
                </td>
                </tr>

                <tr>
                <td> Asal Sekolah </td>
                <td><input type="text" name="asal_sekolah" value="<?php echo $data['asal']?>" required></td>
                </tr>

                <tr>
                <td> Nilai UAN </td>
                <td><input type="text" name="nilai" value="<?php echo $data['UAN']?>" required></td>
                </tr>

                <tr>
                    <th colspan="2"><input class="Sbutton" type="submit" value="submit"></th>
                </tr>
            </table>
        </form>
        </div>
        <div class="footer">
            <h5>Made by Maheswara Bima Sena Tedja</h5>
        </div>
    </div>
</body>