<?php
  require "proses/koneksi.php";
  $sql    = mysqli_query($conn, "SELECT * FROM buku bk LEFT JOIN penulis pn ON bk.penulis = pn.id_penulis WHERE bk.kategori = 1");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Misbah | Book Store</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/"> -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
<main id="best_seller">

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
    <!-- START THE FEATURETTES -->
    <div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-9 fw-bold">Best Seller</h1>
    </div>
    <?php
      $no = 1;
      while ($data   = mysqli_fetch_array($sql)) {
      if($no % 2 == 0){
    ?>  
        <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php echo $data['judul'] ?></h2><span class="text-muted"><?php echo $data['nama'] ?></span>
          <p class="lead"><?php echo $data['deskripsi'] ?></p>
        </div>
        <div class="col-md-5">
          <img src="img/<?php echo $data['gambar'] ?>"  width="450" height="450" ></img>
        </div>
        
        <?php
          $no++;
        ?>
      </div>
      <hr class="featurette-divider">
    <?php
      }
      else{
    ?>
        <div class="row featurette">
        <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"><?php echo $data['judul'] ?></h2><span class="text-muted"><?php echo $data['nama'] ?></span>
          <p class="lead"><?php echo $data['deskripsi'] ?></p>
        </div>
        <div class="col-md-5 order-md-1">
        <img src="img/<?php echo $data['gambar'] ?>"  width="450" height="450" ></img>
        </div>
      </div>
      <hr class="featurette-divider">
      <?php
          $no++;
        ?>
    <?php  
      }
    } 
    ?> 
    <!-- /END THE FEATURETTES -->
   
  </div><!-- /.container -->
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>