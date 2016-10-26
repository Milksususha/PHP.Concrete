<?php
	require_once "AbstractClass.php";
	require_once "ConcreteClass1.php";
	require_once "ConcreteClass2.php";
		$class1 = new ConcreteClass1;
		$class1->printOut();
	echo $class1->prefixValue('"ADD" ') ."</br>";
		$class2 = new ConcreteClass2;
		$class2->printOut();
	echo $class2->prefixValue('"ADD" ') ."</br>";
?>