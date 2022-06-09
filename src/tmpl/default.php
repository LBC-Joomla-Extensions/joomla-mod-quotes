<?php

defined("_JEXEC") or die;

$doc=JFactory::getDocument();

$doc->addStyleSheet(JURI::base() . "./modules/mod_quotes/css/main.css");
$doc->addScript(JURI::base() . "./modules/mod_quotes/js/main.js","text/javascript");

// Disponemos de $params['opiniones'], $params['duracion'] y $params['fondo']

$img=JURI::base() . "./images/" . $params['fondo'];
$rutaFotos=JURI::base() . "./images/2020/modulos/opiniones/";


//Parseamos las opiniones
$temp=explode(",,,",$params['opiniones']);
$opiniones=array();

for($i=0;$i<count($temp);$i++){
   $aux=explode(";;;",$temp[$i]);

   $opiniones[$i]['autor']=$aux[0];
   $opiniones[$i]['opinion']=$aux[1];
   $opiniones[$i]['imagen']=$aux[2];
}

if($params['duracion']<=0 || !isset($params['duracion'])){
   $params['duracion']=5000;
}

?>
<div id="quotes-outer-wrapper">
   <img src='<?php echo $img; ?>' class="quotes-fondo-img" alt='Fondo'>

   <div id="quotes-inner-wrapper" onmouseenter="suspenderTimer()" onmouseleave="reanudarTimer()">
      <div class="quotes-inner-flecha-izq" onclick="prev()">

      </div>

      <?php
      
      $primero=true;
      for($i=0;$i<count($opiniones);$i++){ 
         if($primero){
               $activo=" quote-activo ";
               $primero=false;
         }
         else{
               $activo=" ";
         }

      ?>

      <div id="quotes_<?php echo $i; ?>"class="quotes-inner-text <?php echo $activo; ?>">
         <p class="quotes-text">
               <?php echo $opiniones[$i]['opinion'];       ?>
         </p>
         <img class="quotes-foto" src="<?php echo $rutaFotos . trim($opiniones[$i]['imagen']); ?>" />
         <p class="quotes-autor">
               <?php echo $opiniones[$i]['autor'];       ?>
         </p>    
      </div>

      <?php
      }
      ?>

      <div class="quotes-inner-flecha-der" onclick="next()">
         
      </div>
      
   </div>    
</div>

<script>
   activarTimer(<?php echo $params['duracion']; ?>);
</script>