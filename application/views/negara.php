<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo base_url(); ?>assets/Asset 6.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/negara.css">
    <title>Cabang Olahraga</title>
</head>
<body>
    <div class="background">
        <div class="container">
            <div class="row">
                <div class="col-md-4 batas">
                    <div class="list">
                        <ul>
                            <li> <a href=""><h4>List Negara</h4></a></li>
                            <li> <a href=""> <h4>Register Negara</h4></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 form">
                    <h2 class="tittle">KLASEMEN SEMENTARA</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Nation</th>
                                <th scope="col"><img src="<?php echo base_url(); ?>assets/Asset 3.png" alt=""></th>
                                <th scope="col"><img src="<?php echo base_url(); ?>assets/Asset 4.png" alt=""></th>
                                <th scope="col"><img src="<?php echo base_url(); ?>assets/Asset 5.png" alt=""></th>
                                <th scope="col">TOTAL</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Japan</td>
                                <td>13</td>
                                <td>17</td>
                                <td>20</td>
                                <td>20</td>
                                <td>
                                    <a href=""class="del">Hapus Data</a>
                                    <a href="" class="update">Update</a> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Indonesia</td>
                                <td>12</td>
                                <td>11</td>
                                <td>27</td>
                                <td>20</td>
                                <td><a href=""class="del">Hapus Data</a>
                                    <a href="" class="update">Update</a> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Malaysia</td>
                                <td>11</td>
                                <td>9</td>
                                <td>10</td>
                                <td>20</td>
                                <td><a href=""class="del">Hapus Data</a>
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