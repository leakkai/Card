<!DOCTYPE html>
<html>
	<head> 
		<title>
			Deck of Cards
		</title>
	</head>
	
	<!-- Main body PHP-->
	<!-- Simple PHP file to generate a list of 52 cards in random order, hit shuffle button to shuffle again-->
	<body>
		<?php
			//function to create randomness using current microtime in computer.
			function myRand($min, $max)
			{
				global $seed;
				$max = $max-$min;
				$tmp = 7 *  $seed % 101;
				$ans = (($tmp) % $max)+$min;
				$seed = $tmp;
				return $ans;
			}
			
			//Declaration of arrays, and also assign a microtime into a variable.
			$type = array("a", "b", "c", "d");
			$num = array("Ace", "K", "Q", "J", "10", "9", "8", "7", "6", "5", "4", "3", "2");
			$seed = (int)substr(round(microtime(true)*1000),-2);
			$d = array();
			
			echo "<br/>";					
		?>
		
		<!--Button to hit to refresh the page, to reload the card-->
		<form action="cards.php" method="POST">
			<input type="submit" name="shuf" value="Shuffle!">
		</form> <br/>
		
		<?php
			$c = 0;
			//Assign two dimension array into one dimension.		
			for ($i = 0; $i < 4; $i++)
			{
				for ($j = 0; $j < 13; $j++)
				{
					$d[$c] = $type[$i] . $num[$j];
					$d[$c] . ',';
					$c++;
				}
			}
			
			//Randomly pick a number, then just shuffle the random number index array.
			for ($i = 51; $i > 0; $i--)
			{
				$ran = myRand(0,51);
				$temp = $d[$i];
				$d[$i] = $d[$ran];
				$d[$ran] = $temp;
			}
			
			//Replace the array text to pictures.
			foreach($d as $value)
			{
				$input = ":'".$value."':";
				if ($value == "aAce")
					echo str_replace(":'".$value."':","<img src='DA.png' alt=''>",$input);
				if ($value == "aK")
					echo str_replace(":'".$value."':","<img src='DK.png' alt=''>",$input);
				if ($value == "aQ")
					echo str_replace(":'".$value."':","<img src='DQ.png' alt=''>",$input);
				if ($value == "aJ")
					echo str_replace(":'".$value."':","<img src='DJ.png' alt=''>",$input);
				if ($value == "a10")
					echo str_replace(":'".$value."':","<img src='D10.png' alt=''>",$input);
				if ($value == "a9")
					echo str_replace(":'".$value."':","<img src='D9.png' alt=''>",$input);
				if ($value == "a8")
					echo str_replace(":'".$value."':","<img src='D8.png' alt=''>",$input);
				if ($value == "a7")
					echo str_replace(":'".$value."':","<img src='D7.png' alt=''>",$input);
				if ($value == "a6")
					echo str_replace(":'".$value."':","<img src='D6.png' alt=''>",$input);
				if ($value == "a5")
					echo str_replace(":'".$value."':","<img src='D5.png' alt=''>",$input);
				if ($value == "a4")
					echo str_replace(":'".$value."':","<img src='D4.png' alt=''>",$input);
				if ($value == "a3")
					echo str_replace(":'".$value."':","<img src='D3.png' alt=''>",$input);
				if ($value == "a2")
					echo str_replace(":'".$value."':","<img src='D2.png' alt=''>",$input);
				if ($value == "bAce")
					echo str_replace(":'".$value."':","<img src='HA.png' alt=''>",$input);
				if ($value == "bK")
					echo str_replace(":'".$value."':","<img src='HK.png' alt=''>",$input);
				if ($value == "bQ")
					echo str_replace(":'".$value."':","<img src='HQ.png' alt=''>",$input);
				if ($value == "bJ")
					echo str_replace(":'".$value."':","<img src='HJ.png' alt=''>",$input);
				if ($value == "b10")
					echo str_replace(":'".$value."':","<img src='H10.png' alt=''>",$input);
				if ($value == "b9")
					echo str_replace(":'".$value."':","<img src='H9.png' alt=''>",$input);
				if ($value == "b8")
					echo str_replace(":'".$value."':","<img src='H8.png' alt=''>",$input);
				if ($value == "b7")
					echo str_replace(":'".$value."':","<img src='H7.png' alt=''>",$input);
				if ($value == "b6")
					echo str_replace(":'".$value."':","<img src='H6.png' alt=''>",$input);
				if ($value == "b5")
					echo str_replace(":'".$value."':","<img src='H5.png' alt=''>",$input);
				if ($value == "b4")
					echo str_replace(":'".$value."':","<img src='H4.png' alt=''>",$input);
				if ($value == "b3")
					echo str_replace(":'".$value."':","<img src='H3.png' alt=''>",$input);
				if ($value == "b2")
					echo str_replace(":'".$value."':","<img src='H2.png' alt=''>",$input);
				if ($value == "cAce")
					echo str_replace(":'".$value."':","<img src='CA.png' alt=''>",$input);
				if ($value == "cK")
					echo str_replace(":'".$value."':","<img src='CK.png' alt=''>",$input);
				if ($value == "cQ")
					echo str_replace(":'".$value."':","<img src='CQ.png' alt=''>",$input);
				if ($value == "cJ")
					echo str_replace(":'".$value."':","<img src='CJ.png' alt=''>",$input);
				if ($value == "c10")
					echo str_replace(":'".$value."':","<img src='C10.png' alt=''>",$input);
				if ($value == "c9")
					echo str_replace(":'".$value."':","<img src='C9.png' alt=''>",$input);
				if ($value == "c8")
					echo str_replace(":'".$value."':","<img src='C8.png' alt=''>",$input);
				if ($value == "c7")
					echo str_replace(":'".$value."':","<img src='C7.png' alt=''>",$input);
				if ($value == "c6")
					echo str_replace(":'".$value."':","<img src='C6.png' alt=''>",$input);
				if ($value == "c5")
					echo str_replace(":'".$value."':","<img src='C5.png' alt=''>",$input);
				if ($value == "c4")
					echo str_replace(":'".$value."':","<img src='C4.png' alt=''>",$input);
				if ($value == "c3")
					echo str_replace(":'".$value."':","<img src='C3.png' alt=''>",$input);
				if ($value == "c2")
					echo str_replace(":'".$value."':","<img src='C2.png' alt=''>",$input);
				if ($value == "dAce")
					echo str_replace(":'".$value."':","<img src='SA.png' alt=''>",$input);
				if ($value == "dK")
					echo str_replace(":'".$value."':","<img src='SK.png' alt=''>",$input);
				if ($value == "dQ")
					echo str_replace(":'".$value."':","<img src='SQ.png' alt=''>",$input);
				if ($value == "dJ")
					echo str_replace(":'".$value."':","<img src='SJ.png' alt=''>",$input);
				if ($value == "d10")
					echo str_replace(":'".$value."':","<img src='S10.png' alt=''>",$input);
				if ($value == "d9")
					echo str_replace(":'".$value."':","<img src='S9.png' alt=''>",$input);
				if ($value == "d8")
					echo str_replace(":'".$value."':","<img src='S8.png' alt=''>",$input);
				if ($value == "d7")
					echo str_replace(":'".$value."':","<img src='S7.png' alt=''>",$input);
				if ($value == "d6")
					echo str_replace(":'".$value."':","<img src='S6.png' alt=''>",$input);
				if ($value == "d5")
					echo str_replace(":'".$value."':","<img src='S5.png' alt=''>",$input);
				if ($value == "d4")
					echo str_replace(":'".$value."':","<img src='S4.png' alt=''>",$input);
				if ($value == "d3")
					echo str_replace(":'".$value."':","<img src='S3.png' alt=''>",$input);
				if ($value == "d2")
					echo str_replace(":'".$value."':","<img src='S2.png' alt=''>",$input);	
			}
		?>
	</body>
</html>