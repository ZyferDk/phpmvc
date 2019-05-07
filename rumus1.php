<?php

	$awal = $_GET['awal'];
	$akhir= $_GET['akhir'];

	$item = $_GET['pilihan'];
	switch($item)
		{
			case 'genap':
				genap($awal, $akhir);
				break;

			case 'ganjil':
				ganjil($awal, $akhir);
				break;

			case 'prima':
				prima($awal, $akhir);
				break;

			case 'fibonacci':
				fibonacci($awal, $akhir);
				break;

			default:
				echo "Gagal masuk";
		}


	// bilangan genap 
	function genap($awal, $akhir)
		{
			for ($genap = $awal; $genap <= $akhir; $genap++) 
				{ 
					if($genap % 2 == 0)
					{
						echo "bilangan genap ke $genap <br>";
					}
				}
		}

	function ganjil($awal, $akhir)
		{
			for ($ganjil = $awal; $ganjil < $akhir; $ganjil++) 
				{ 
					if ($ganjil % 2 == 1) 
						{
							print "bilangan ganjil ke $ganjil <br>";
						}
				}
		}

	function prima($awal, $akhir)
		{
			for ($prima = $awal; $prima <= $akhir; $prima++) 
				{ 
					$counter = 0;
					for ($j = 1; $j <= $prima; $j++) 
						{ 
							if($prima % $j == 0)
								{
									$counter++;
								}
						}

						if ($counter == 2)
							{
								echo "bilangan prima ke $prima <br>";
							}
				}
		}

	function fibonacci($awal, $akhir)
		{
			$sebelum = 0;
			$sekarang= 1;

			// print $sebelum . ' ' . $sekarang;

			for ($fibonacci = $awal; $fibonacci <= $akhir; $fibonacci++) 
				{ 
					$output = $sebelum + $sekarang;
					print "bilangan fibonacci ke $output <br>";

					$sebelum = $sekarang;
					$sekarang= $output;
				}
		}