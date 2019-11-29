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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/homepage.css">
    <title>homepage</title>
</head>

<script>
  $(document).ready(function(){
    $('a.tab-menu').click(function(){
      let idHref = $(this).attr('href');
        $('.tab-menu').removeClass('active');
        $(this).addClass('active');

        $('.content').removeClass('page-active');
        $('.content' + idHref).addClass('page-active');
    });
  });
</script>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#"><img class="navimage" src="<?php echo base_url(); ?>assets/navlogo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link batas active tab-menu" href="#klasemen">Klasemen <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link tab-menu" href="#pertandingan">Match Detail</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link batas" href="<?php echo base_url('AsianGames/login'); ?>">LOGIN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('AsianGames/registrasi');?>">SIGN UP</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div>
      <img class="logo" src="<?php echo base_url(); ?>assets/Asset 11.png" alt="">
  </div>

  <!-- pertandingan view -->
  <div class="container" id="pertandingan">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 form">
          <h2 class="tittle">LIST PERTANDINGAN</h2>
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">ID PERTANDINGAN</th>
                      <th scope="col">FASE PERTANDINGAN</th>
                      <th scope="col">JADWAL</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>SOC1923</td>
                      <td>Penyisihan Group(IND vs MALAY)</td>
                      <td>Tuesday, April 10 2018</td>
                  </tr>
                  <tr>
                      <td>BAS189</td>
                      <td>Semifinal(SGP VS THAI)</td>
                      <td>Monday, April 15 2018</td>
                  </tr>
                  <tr>
                      <td>SW123</td>
                      <td>Renang Gaya Bebas</td>
                      <td>sunday, May 15 2018</td>
                  </tr>
              </tbody>
          </table>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
  <!-- klasemen view -->
  <div class="container page-active" id="klasemen">
      <div class="row">
          <div class="col-md-2"></div>
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
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <th scope="row">1</th>
                          <td>Japan</td>
                          <td>13</td>
                          <td>17</td>
                          <td>20</td>
                      </tr>
                      <tr>
                          <th scope="row">2</th>
                          <td>Indonesia</td>
                          <td>12</td>
                          <td>11</td>
                          <td>27</td>
                      </tr>
                      <tr>
                          <th scope="row">3</th>
                          <td>Malaysia</td>
                          <td>11</td>
                          <td>9</td>
                          <td>10</td>
                      </tr>
                  </tbody>
              </table>
          </div>
          <div class="col-md-2"></div>
      </div>
  </div>

  
</body>
</html>