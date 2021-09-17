<?php
//Zero Levo Occupation


function getOccupation()
{

	$a11 = array("Elven Artisan", "Elf", "Staff", "1d4", "Clay, 1 lbs.");
	$a12 = array("Elven Barrister", "Elf", "Quill (as Dart)", "1d4", "Book");
	$a13 = array("Elven Chandler", "Elf", "Scissors (as Dagger)", "1d4", "Candles, 20");
	$a14 = array("Elven Falconer", "Elf", "Dagger", "1d4", "Falcon");
	$a15 = array("Elven Forester", "Elf", "Staff", "1d4", "Herbs, 1 lbs.");
	$a16 = array("Elven Herbalist", "Elf", "Staff", "1d4", "Herbs, 1 lbs.");
	$a17 = array("Elven Glassblower", "Elf", "Hammer (as Club)", "1d4", "Glass Beads");
	$a18 = array("Elven Navigator", "Elf", "Bow", "1d6", "Spyglass");
	$a19 = array("Elven Sage", "Elf", "Dagger", "1d4", "Parchment and Quill Pen");
	$a20 = array("Elven Scholar", "Elf", "Dagger", "1d4", "Parchment and Quill Pen");
	

        $array1 = array($a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20);

        shuffle($array1);
        
        return $array1[0];
        
}

function tradeGoodsAddition($occupation, $weapon)
{
	if($weapon === "Pitchfork (as Spear)")
	{
		$animalArray = array(" (sheep)", " (goat)", " (cow)", " (duck)", " (goose)", " (mule)");
		shuffle($animalArray);
		return $animalArray[0];
	}
	else if($occupation === "Wainwright")
	{
		$cartArray = array(" containing tomatoes", " containing nothing", " containing straw", " containing your dead", " containing dirt", " containing rocks");
		shuffle($cartArray);
		return $cartArray[0];
	}
	else if($occupation === "Mercenary")
	{
		return "Hide Armour";
	}
	else if($occupation === "Outlaw")
	{
		return "Leather Armour";
	}
	else if($occupation === "Soldier")
	{
		return "Shield";
	}
	else
	{
		return "";
	}


}


?>