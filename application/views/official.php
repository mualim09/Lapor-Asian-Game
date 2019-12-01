<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo base_url(); ?>assets/Asset 6.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pertandingan.css">
    <title>Atlet</title>
</head>
<body>
    <div class="background">
        <div class="container">
            <div class="row">
                <div class="col-md-4 batas">
                    <div class="list">
                        <ul>
                            <li> <a href=""><h4>List Official</h4></a></li>
                            <li> <a href=""> <h4>Register Official</h4></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 form">
                    <h2 class="tittle">LIST OFFICIAL</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">OFFICIAL ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">PHONE NUMBER</th>
                                <th scope="col">GENDER</th>
                                <th scope="col">BIRTH DAY</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ID457798</td>
                                <td>Jojo Muhammad</td>
                                <td>025154897</td>
                                <td>Male</td>
                                <td>March, 12 1970</td>
                                <td><a href=""class="del">Hapus</a>
                                    <a href="" class="update">Update</a> 
                                </td>
                            </tr>
                            <tr>
                                <td>ML457798</td>
                                <td>Jartjit Singh</td>
                                <td>020054897</td>
                                <td>Male</td>
                                <td>Mei, 12 1970</td>
                                <td><a href=""class="del">Hapus</a>
                                    <a href="" class="update">Update</a> 
                                </td>
                            </tr>
                            <tr>
                                <td>SGD1718209</td>
                                <td>Struad Moko</td>
                                <td>0725154897</td>
                                <td>Male</td>
                                <td>December, 12 1980</td>
                                <td><a href=""class="del">Hapus</a>
                                    <a href="" class="update">Update</a> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>