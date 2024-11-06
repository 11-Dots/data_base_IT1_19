<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <style>
        body {
            background-color: #0043c8;
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
            <h2> Data View</h2>
        </div>
        <div style="padding:10px">
            <table style="margin:auto">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "db_IT1_Bima_19";

            $conn = new mysqli($servername, $username, $password, $db);

            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $id = 1;
            $data = mysqli_query($conn, "SELECT * FROM tb_IT1_Bima_19");
            while ($results = mysqli_fetch_array($data)) {
            ?>
                <tr style="height:25px">
                <th colspan="2"> ID: <?php echo $id; ?></th>
                </tr>

                <tr>
                <td> Nama Lengkap: </td>
                <td><?php echo $results['pengunjung']; ?></td>
                </tr>

                <tr>
                <td> Nama Panggilan: </td>
                <td><?php echo $results['panggilan']; ?></td>
                </tr>

                <tr>
                <td> Tempat Lahir: </td>
                <td><?php echo $results['lahir']; ?></td>
                </tr>

                <tr>
                <td> Jurusan: </td>
                <td><?php echo $results['jurus']; ?></td>
                </tr>

                <tr>
                <td> Alamat Rumah: </td>
                <td><?php echo $results['rumah']; ?></td>
                </tr>

                <tr>
                <td> Jenis Kelamin: </td>
                <td><?php echo $results['kelamin']; ?></td>
                </tr>

                <tr>
                <td> Asal Sekolah: </td>
                <td><?php echo $results['asal']; ?></td>
                </tr>

                <tr>
                <td> Nilai UAN: </td>
                <td><?php echo $results['UAN']; ?></td>
                </tr>

                <tr>
                <th><a href="Edit_19.php?id=<?php echo $results['id']; ?>">Edit</a></th>
                <th><a href="Delete_19.php?id=<?php echo $results['id']; ?>" onclick="return confirm(' Anda yakin ingin menghapus data ini?')">Delete</a></th>
                </tr>

            <?php
            $id++;
            }
            ?>
            </table>
        </div>
        <div class="footer">
            <h5> Made by Maheswara Bima Sena Tedja </h5>
        </div>
    </div>
</body>
    
