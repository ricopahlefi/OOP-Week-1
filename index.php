<?php 
	
	class animal {
		public $jumlah_kaki;

		function bersuara(){
			return "bersuara";
		}
	}

	class kucing extends animal {

		public $bisa_terbang = "tidak bisa terbang";

		function bersuara(){
			return "meoooong meooong";
		}	
	}
	class anjing extends animal {

		public $bisa_terbang = "tidak bisa terbang";

		function bersuara(){
			return "guuuk guuuk guuuuk";
		}
	}
	class elang extends animal {

		public $bisa_terbang = "bisa terbang";

		function bersuara(){
			return "nggggikkkk";
		}
	}
	class angsa extends animal {

		public $bisa_terbang = "bisa terbang";

		function bersuara(){
			return "kweeeek kweeek";
		}
	}

	$momo = new kucing;
	$momo->jumlah_kaki = 4;
	echo "Momo adalah Kucing <br>";
	echo "Momo punya kaki sebanyak ".$momo->jumlah_kaki."<br>";
	echo "Momo ".$momo->bisa_terbang."<br>";
	echo "Suaranya ".$momo->bersuara()."<br>";

	echo "<hr>";

	$doggo = new anjing;
	$doggo->jumlah_kaki = 4;
	echo "Doggo adalah Anjing <br>";
	echo "Doggo punya kaki sebanyak ".$doggo->jumlah_kaki."<br>";
	echo "Doggo ".$doggo->bisa_terbang."<br>";
	echo "Suaranya ".$doggo->bersuara()."<br>";

	echo "<hr>";

	$zya = new elang;
	$zya->jumlah_kaki = 2;
	echo "Zya adalah Elang <br>";
	echo "Zya punya kaki sebanyak ".$zya->jumlah_kaki."<br>";
	echo "Zya ".$zya->bisa_terbang."<br>";
	echo "Suaranya ".$zya->bersuara()."<br>";

	echo "<hr>";

	$masha = new angsa;
	$masha->jumlah_kaki = 2;
	echo "Masha adalah Angsa <br>";
	echo "Masha punya kaki sebanyak ".$masha->jumlah_kaki."<br>";
	echo "Masha ".$masha->bisa_terbang."<br>";
	echo "Suaranya ".$masha->bersuara()."<br>";

	echo "<hr>";	
 ?>