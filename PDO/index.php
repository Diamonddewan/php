<?php

$query = require 'bootstrap.php';

$result = $query->selectAll('todos');

require 'index.view.php';
