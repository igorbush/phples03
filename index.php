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
		foreach ($animals as $materic => $animal) 
		{
			foreach ($animal as $fullnames) 
			{
				$rzname = explode (' ', $fullnames);
					if (count($rzname) == 2) 
					{
						$newaarray[$materic][] = implode (' ', $rzname);
						$twoword[] = $rzname[1];
					}
			}
		}
		shuffle ($twoword);

		foreach ($newaarray as $materic => $animal) 
		{
			echo '<h2>' . $materic . '</h2>';
			$animallist =[];
				foreach ($animal as $name) 
				{
					$names = explode (' ', $name);
	        		$animallist[] = $names[0] . ' ' . array_shift($twoword);
				}
			echo '<p>' . implode (', ', $animallist) . '</p>';
		}
	?>
	</div>
</body>
</html>