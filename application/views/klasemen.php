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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/klasemen.css">
    <title>Klasemen</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 form">
                <h2 class="tittle">KLASEMEN SEMENTARA</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Nation</th>
                            <th scope="col"><img src="<?php echo base_url(); ?>assets/Asset 3.png" alt=""></th>
                            <th scope="col"><img src="<?php echo base_url(); ?>assets/Asset 4.png" alt=""></th>
                            <th scope="col"><img src="<?php echo base_url(); ?>assets/Asset 5.png" alt=""></th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            foreach ($negara['entries']->result_array() as $negara_entry){
                        ?>
                         <tr>
			                <td><?php echo $no++; ?></td>
			                <td><?php echo ($negara_entry['nama_negara'] != NULL) ? $negara_entry['nama_negara'] : '-';  ?></td>
                            <td><?php echo $negara_entry['emas'] ?></td>
                            <td><?php echo $negara_entry['perak'] ?></td>
                            <td><?php echo $negara_entry['perunggu'] ?></td>
                            <td><?php echo $negara_entry['total'] ?></td>
                        </tr>
                        <?php
			                }
		                ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>