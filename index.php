<?php 
	interface familyInterface{
		public $type = 'Human';
		public function loveEachOther()
	    {

	    }
	}

	abstract class family implements familyInterface
	{
	    private $peopleCount = 3;
	    public function teachChild()
	    {
	 
	    }	    
	}

	interface interfaceFarther
	{
		public $intellect = 'clever';
	}
	
	class Farther extends family implements interfaceFarther
	{
	    
		public $age = 30;
		public function makeMoney()
		{

		}
	}
	interface interfaceMother
		{
			public $eyes = 'blue';
		}
	
	class Mother extends family implements interfaceMother
	{
		public $age = 27;
		public function cook()
		{

		}

	}
	class Child implements interfaceFarther, interfaceMother, familyInterface
	{
		public $age = 4;
		public $sex = female;

	}


 ?>