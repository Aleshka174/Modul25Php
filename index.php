<?php 
	interface familyInterface
	{
		public function loveEachOther();
	}
	abstract class family implements familyInterface
	{
		 public $type = "Человек";
		 public $age;
	    private $peopleCount;
	    public function teachChild()
	    {
	 		echo "Учить ребенка";
	    }	
	    public function loveEachOther()
	    {
	    	echo "Любить друг друга";
	    }    
	}

	class Farther extends family
	{
		public $geneticM = 'Ум';
		public $wife;
		public function makeMoney()
		{
			echo "Заработок денег";
		}
		public function geneMan()
		{
			echo $this->geneticM;
		}
	}
	interface motherInterface
	{
		const geneticW = 'Глаза';
		public function geneWoman();
	}
	class Mother extends family 
	{
		public $husband;
		public $geneticW = 'Глаза';
		public function cook()
		{
			echo "Приготовка еды";
		}
		public function geneWoman()
		{
			echo $this->geneticW;
		}
	}

	class child extends farther implements motherInterface
	{
		public $sex;
		public function teach()
		{
			echo "Учиться в Школе";
		}
		public function geneWoman()
		{
			 echo $this::geneticW;
		}
		public function geneChild()
		{
			echo $this->geneMan(); echo "  и  ";
			echo $this->geneWoman();
		}

	}

	$farther = new farther;
	$mother = new mother;
	$child = new child;
	echo $farther->age = 27; echo "<br>";
	echo $farther->type; echo "<br>";
	echo $farther-> makeMoney(); echo "<br>";
	echo $mother-> cook(); echo "<br>";	
	echo $farther -> teachChild(); echo "<br>";
	echo $mother -> loveEachOther(); echo "<br>";
	echo $child -> makeMoney(); echo "<br>";
	echo $child -> sex = "Женский пол"; echo "<br>";
	echo $child -> peopleCount = 3; echo "<br>";
	echo $mother -> geneWoman(); echo "<br>";
	echo $farther -> geneMan(); echo "<br>";
	echo $child-> teach(); echo "<br>";
	echo $child -> geneChild(); echo "<br>";
	

 ?>