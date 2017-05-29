<?php include("header.php");?>
<p> <strong>Aquí contendrá: detalle de articulos.</strong></p>
<?php
 $csv = array_map("str_getcsv", file('respuestas.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
$la_url = $_GET['url'];
?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="site-heading">
                <h1><?php echo($csv[$la_url]["titulo"])?></h1>
                <hr class="small">
                <h5>Referencia: <?php echo $csv[$la_url]['apa'];?> </h5>
                <img src="<?php echo $csv[$la_url]["images"];?>" class="img-responsive">
                <h5>Palabras clave: <small><?php echo $csv[$la_url]['tags'];?> </h5>
                <h6>Link: <a href="<?php echo $csv[$la_url]['vinculo'];?>"><?php echo $csv[$la_url]['vinculo'];?></a></h6>
            </div>
        </div>
    </div>
</div>
</header>


    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                  <?php echo($csv[$la_url]["texto"])?>

              </div>
            </div>
        </div>
    </article>

    <hr>

<?php include("footer.php");?>
