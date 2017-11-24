<?php 
	$animals = [
		"Eurasia" => ["Alces alces", "Vulpes lagopus", "Canis lupus"],
		"Africa" => ["Elephantidae", "Rhinocerotidae","Green hippotigris"],
		"North America" => ["Canis latrans", "Procyon", "Mephitidae"],
		"South America" => ["Panthera onca", "Myrmecophagidae", "Puma concolor"],
		"Australia" => ["Phascolarctos cinereus", "Macropus", "Ornithorhynchus anatinus"],
		"Antarctica " => ["Spheniscidae", "Ursus maritimus", "Odobenus rosmarus"],
		];

	$newaarray = [];	
	$twoword = [];
	
	foreach ($animals as $continent => $animal) 
	{
		foreach ($animal as $full_names) 
		{
			$rzname = explode (' ', $full_names);
			if (count($rzname) == 2) 
			{
				$new_array[$continent][] = implode (' ', $rzname);
				$two_word[] = $rzname[1];
			}
		}
	}
		shuffle ($two_word);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	body {
		width: 100%;
		max-height: 100%;
		background: url(bg.png);
		padding-top: 70px;
	}

	.wrapper {
		width: 30%;
		height: 50%;
		margin: 0 auto;
		padding: 20px 0;
		text-align: center;
		background-color: #CDCDCD;
	}

	h2 {
		text-transform: uppercase;
	}
</style>
<body>
	<div class="wrapper">
	<?php 
		foreach ($new_array as $continent => $animal) 
		{
			echo '<h2>' . $continent . '</h2>';
			$animal_list =[];
				foreach ($animal as $name) 
				{
					$names = explode (' ', $name);
	        		$animal_list[] = $names[0] . ' ' . array_shift($two_word);
				}
			echo '<p>' . implode (', ', $animal_list) . '</p>';
		}
	?>
	</div>
</body>
</html>