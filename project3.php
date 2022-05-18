<?php

include 'module3.php';
include 'module4.php';

use LibraryTwo\TestToolkit as TK;

$testObject = new TK\TestClass();
$testObjectLibraryOne = new LibraryOne\TestClass();

$testObject->LibraryName();
$testObjectLibraryOne->LibraryName();