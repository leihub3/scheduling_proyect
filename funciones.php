<?php

function color_curso($curso){
switch($curso){
case "1er Año":
$color = "yellow";
break;
case "2do Año":
$color = "lightblue";
break;
case "3er Año":
$color = "pink";
break;
case "4to Año":
$color = "orange";
break;
case "5to Año":
$color = "#9966FF";
break;
}
return $color;
}

///////////////////////////////////
function casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id){
//echo $aula . " " . $h_fin . " " .$color. " " . $materia. " " . $profesor. " " . $letra_id. " " . $id;
//break;
if($h_fin == "08:30:00"){
?>
<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border:1px #000000 solid;}
</style>
<?php	
}elseif($h_fin == "09:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>

<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "10:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "11:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "12:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "13:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "14:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "15:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "15:55:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>,#<?php echo $letra_id. ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+8); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "16:40:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+9); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "17:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+10); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "18:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+11); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "19:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>,#<?php echo $letra_id . ($id+11); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+12); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "20:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>,#<?php echo $letra_id . ($id+11); ?>,#<?php echo $letra_id . ($id+12); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+13); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "21:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>,#<?php echo $letra_id . ($id+11); ?>,#<?php echo $letra_id . ($id+12); ?>,#<?php echo $letra_id . ($id+13); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+14); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>,#<?php echo $letra_id . ($id+11); ?>,#<?php echo $letra_id . ($id+12); ?>,#<?php echo $letra_id . ($id+13); ?>,#<?php echo $letra_id . ($id+14); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+15); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>,#<?php echo $letra_id . ($id+11); ?>,#<?php echo $letra_id . ($id+12); ?>,#<?php echo $letra_id . ($id+13); ?>,#<?php echo $letra_id . ($id+14); ?>,#<?php echo $letra_id . ($id+15); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+16); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}
}

///////////////////////////////

function casilleroX2($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id){
if($h_fin == "09:15:00"){
?>
<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border:1px #000000 solid;}
</style>
<?php	
}elseif($h_fin == "10:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>

<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "11:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "12:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "13:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "14:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "15:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "15:55:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "16:40:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>,#<?php echo $letra_id. ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+8); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "17:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+9); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "18:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+10); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "19:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+11); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "20:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>,#<?php echo $letra_id . ($id+11); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+12); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "21:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>,#<?php echo $letra_id . ($id+11); ?>,#<?php echo $letra_id . ($id+12); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+13); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>,#<?php echo $letra_id . ($id+11); ?>,#<?php echo $letra_id . ($id+12); ?>,#<?php echo $letra_id . ($id+13); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+14); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>,#<?php echo $letra_id . ($id+11); ?>,#<?php echo $letra_id . ($id+12); ?>,#<?php echo $letra_id . ($id+13); ?>,#<?php echo $letra_id . ($id+14); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+15); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}
}

/////////////////////////////////////


function casilleroX3($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id){
if($h_fin == "10:15:00"){
?>
<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border:1px #000000 solid;}
</style>
<?php	
}elseif($h_fin == "11:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>

<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "12:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "13:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "14:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "15:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "15:55:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "16:40:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "17:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>,#<?php echo $letra_id. ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+8); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "18:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+9); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "19:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+10); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "20:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+11); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "21:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>,#<?php echo $letra_id . ($id+11); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+12); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>,#<?php echo $letra_id . ($id+11); ?>,#<?php echo $letra_id . ($id+12); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+13); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>,#<?php echo $letra_id . ($id+11); ?>,#<?php echo $letra_id . ($id+12); ?>,#<?php echo $letra_id . ($id+13); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+14); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}
}


/////////////////////////////////////
///////////////////////////////////////

function casilleroX4($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id){
if($h_fin == "11:00:00"){
?>
<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border:1px #000000 solid;}
</style>
<?php	
}elseif($h_fin == "12:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>

<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "13:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "14:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "15:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "15:55:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "16:40:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "17:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "18:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>,#<?php echo $letra_id. ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+8); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "19:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+9); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "20:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+10); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "21:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+11); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>,#<?php echo $letra_id . ($id+11); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+12); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>,#<?php echo $letra_id . ($id+11); ?>,#<?php echo $letra_id . ($id+12); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+13); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}
}

/////////////////////////////////////
///////////////////////////////////////

function casilleroX5($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id){
if($h_fin == "12:15:00"){
?>
<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border:1px #000000 solid;}
</style>
<?php	
}elseif($h_fin == "13:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>

<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "14:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "15:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "15:55:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "16:40:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "17:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "18:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "19:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>,#<?php echo $letra_id. ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+8); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "20:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+9); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "21:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+10); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+11); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>,#<?php echo $letra_id . ($id+11); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+12); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}
}


/////////////////////////////////////
///////////////////////////////////////

function casilleroX6($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id){
if($h_fin == "13:00:00"){
?>
<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border:1px #000000 solid;}
</style>
<?php	
}elseif($h_fin == "14:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>

<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "15:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "15:55:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "16:40:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "17:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "18:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "19:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "20:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>,#<?php echo $letra_id. ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+8); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "21:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+9); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+10); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id . ($id+9); ?>,#<?php echo $letra_id . ($id+10); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+11); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}
}


/////////////////////////////////////
///////////////////////////////////////

function casilleroX7($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id){
if($h_fin == "14:15:00"){
?>
<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border:1px #000000 solid;}
</style>
<?php	
}elseif($h_fin == "15:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>

<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "15:55:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "16:40:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "17:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "18:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "19:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "20:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "21:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>,#<?php echo $letra_id. ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+8); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+9); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>, #<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>,#<?php echo $letra_id. ($id+9); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+10); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}
}



/////////////////////////////////////
///////////////////////////////////////

function casilleroX8($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id){
if($h_fin == "15:00:00"){
?>
<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border:1px #000000 solid;}
</style>
<?php	
}elseif($h_fin == "15:55:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>

<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "16:40:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "17:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "18:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "19:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "20:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "21:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>,#<?php echo $letra_id. ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+8); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>,#<?php echo $letra_id. ($id+7); ?>,#<?php echo $letra_id. ($id+8); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+9); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}
}


/////////////////////////////////////
///////////////////////////////////////

function casilleroX9($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id){
if($h_fin == "15:55:00"){
?>
<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border:1px #000000 solid;}
</style>
<?php	
}elseif($h_fin == "16:40:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>

<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "17:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "18:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "19:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "20:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "21:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6); ?>,#<?php echo $letra_id . ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+8); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}
}


/////////////////////////////////////
///////////////////////////////////////

function casilleroX10($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id){
if($h_fin == "16:40:00"){
?>
<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border:1px #000000 solid;}
</style>
<?php	
}elseif($h_fin == "17:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>

<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "18:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "19:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "20:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "21:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+6); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id . ($id+5) ; ?>,#<?php echo $letra_id . ($id+6) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+7); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}
}


/////////////////////////////////////
///////////////////////////////////////

function casilleroX11($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id){
if($h_fin == "17:30:00"){
?>
<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border:1px #000000 solid;}
</style>
<?php	
}elseif($h_fin == "18:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>

<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "19:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "20:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "21:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+5) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id. ($id+4); ?>,#<?php echo $letra_id. ($id+5); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+6) ; ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}
}


/////////////////////////////////////
///////////////////////////////////////

function casilleroX12($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id){
if($h_fin == "18:45:00"){
?>
<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border:1px #000000 solid;}
</style>
<?php	
}elseif($h_fin == "19:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>

<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "20:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "21:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+2); ?>,#<?php echo $letra_id . ($id+3); ?>,#<?php echo $letra_id . ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+5); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}
}


/////////////////////////////////////
///////////////////////////////////////

function casilleroX13($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id){
if($h_fin == "19:30:00"){
?>
<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border:1px #000000 solid;}
</style>
<?php	
}elseif($h_fin == "20:30:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>

<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "21:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>,#<?php echo $letra_id. ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+4); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}
}


/////////////////////////////////////
///////////////////////////////////////

function casilleroX14($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id){
if($h_fin == "20:30:00"){
?>
<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border:1px #000000 solid;}
</style>
<?php	
}elseif($h_fin == "21:15:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>

<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>,#<?php echo $letra_id . ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id. ($id+3); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>
<td id="<?php echo $letra_id . $id; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}
}


/////////////////////////////////////
///////////////////////////////////////

function casilleroX15($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id){
if($h_fin == "21:15:00"){
?>
<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border:1px #000000 solid;}
</style>
<?php	
}elseif($h_fin == "22:00:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>

<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}elseif($h_fin == "22:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+2); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>

<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}
}


/////////////////////////////////////
///////////////////////////////////////

function casilleroX16($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id){
if($h_fin == "22:00:00"){
?>
<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border:1px #000000 solid;}
</style>
<?php	

}elseif($h_fin == "22:45:00"){
?>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border-bottom:none;border-right:1px #000000 solid;}
#<?php echo $letra_id . ($id+1); ?>{background:<?php echo $color; ?>;border-top:none;border-bottom:1px #000000 solid;border-right:1px #000000 solid;}
</style>

<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<?php
}
}
/////////////////////////////////////
///////////////////////////////////////

function casilleroX17($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id){
if($h_fin == "22:45:00"){
?>
<td id="<?php echo $letra_id . $id; ?>" bgcolor="<?php echo $color; ?>"><?php echo $materia . "<br>" . strtoupper($profesor); ?></td>
<style>
#<?php echo $letra_id . $id; ?>{background:<?php echo $color; ?>;border:1px #000000 solid;}
</style>
<?php	
}
}





?>