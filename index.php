<?php 

//una funcion para contar visitors
function setCounter($fileName = 'visitors.txt'){
	//comprueba si existe la carpeta
	if (file_exists($fileName)) {
		//sumamos 1
		$count =(int)file_get_contents($fileName)+1;
		//ponemos en el archivo
		file_put_contents($fileName, $count);
		//solo se ejecutara una vez	
	}else{
		$handle = fopen($fileName, 'w+');
		$count = 1;

		fwrite($handle, $count);
		fclose($handle);

	}
	return $count;


}
$visitors = setCounter();













 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
<h1>Here is the dummy to work</h1>
<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit maxime, consectetur unde quaerat nobis sequi at magnam quae vitae aut omnis temporibus quisquam a, expedita, ullam, molestiae! Facilis sunt, blanditiis aperiam ducimus delectus animi culpa molestiae reiciendis quos laudantium accusantium, itaque, amet consectetur. Dignissimos officiis illo aspernatur unde optio ea soluta ullam tempore, aliquid, voluptatum laudantium rerum! Cumque, veniam, ad.
</p>
 My website visitors <br>
 <?php echo $visitors; ?>
 	
 </body>
 </html>