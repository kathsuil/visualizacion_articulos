<?php include('header.php');?>
<?php
$json= file_get_contents('biblio.json');
$datos = json_decode($json,true);
$todos = count ($datos);
 ?>
<p> <strong>Esta página contendrá: Listado de referencias bibliográficas (10 min)</strong></p>
    <!-- Main Content -->
<div class="container">
<div class="row">
  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<!--<pre><?php print_r($datos);?></pre> -->
</div>

<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

<?php for($n = 0; $n < $todos; $n++){?>
  <div class="post-preview">
      <p><?php echo($datos[$n]["autor"]);?> (<?php echo($datos[$n]["year"]);?>). <?php echo($datos[$n]["title"]);?>. <?php echo($datos[$n]["city"]);?>:<?php echo($datos[$n]["ed"]);?></p>
  </div>
<?php }; ?>


            </div>
        </div>
    </div>

<hr>


    <?php include('footer.php');?>
