<?php

$query = require 'bootstrap.php';

$result = $query->selectAll('users'); // Select all users from users table

require 'index.view.php';
