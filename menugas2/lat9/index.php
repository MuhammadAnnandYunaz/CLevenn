<?php

require_once __DIR__ . "/controllers/LibraryControllers.php";
require_once __DIR__ . "/models/LibraryModels.php";

$index = new Library();
$index->index();
