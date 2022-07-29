<?php

const BR = "<br/>";

abstract class Element{
	
	abstract public function remind(): string;
}
//child classes - fire and water
//parent class - element

class Water extends Element{
	
	public function remind(): string
	{

	//return "Water Element";
		return get_class($this).''.get_parent_class($this);
	}
}

class Fire extends Element{
	
	public function remind(): string
	{

	//return "Water Element";
		return get_class($this).''.get_parent_class($this);
	}
}

class Air extends Element{
	
	public function remind(): string
	{

	//return "Water Element";
		return get_class($this).''.get_parent_class($this);
	}
}

$element = new Water();
echo $element ->remind();

echo BR;

$element2 = new Fire();
echo $element2 ->remind();

echo BR;

$element3 = new Air();
echo $element3 ->remind();


?>