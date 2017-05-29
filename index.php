<?php include('header.php');?>
<?php
$json= file_get_contents('nada.json');
$datos = json_decode($json,true);
$todos = count ($datos);
 ?>
<p> <strong>MEGATAGS.CO </strong></p>
<ul>
<li> <small>30%</small><strong>DISEÑO:</strong>Minimalista, pertinente, consistente,"responsive"</li>
<li> <small>10%</small><strong>METADATOS:</strong>Search engine, schema.org for google, twitter, open graph general</li>
<li> <small>60%</small><strong>CONTENIDOS:</strong>Lo indicado en cada página:</li>
</ul>
<p> <strong>Esta página contendrá: Articulos </strong></p>
 <?php
 $csv = array_map("str_getcsv", file('respuestas.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
               ?>
               <?php for($a = 0; $a < $total = count($csv); $a++){?>
               <!--esto es lo que repetiré-->
               <div class="container">
                   <div class="row">
                       <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                 <div class="post-preview">
                     <a href="single.php?url=<?php print($a)?>">
                         <h2 class="post-title"><?php echo($csv[$a]["titulo"])?></h2>
                         <img src="<?php echo $csv[$a]["images"];?>" class="img-responsive">
                                              </a>
                         <h5>Palabras clave: <small><?php echo $csv[$a]['tags'];?> </h5>
                         <h5>Link: <a href="<?php echo $csv[$a]['vinculo'];?>"><?php echo $csv[$a]['vinculo'];?></a></small></h5>
                         </h3>
                 </div>
               </div>
             </div>
           </div>
 <?php };?>
<?php include('footer.php');?>
