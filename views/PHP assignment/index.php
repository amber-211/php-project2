<?php

require('app/app.php');

$view_bag = [
    'title' => 'EMPLOYEES',
    'heading' => 'EMPLOYEE DETAILS'
];

if (isset($_GET['search'])) {
    $items = search_terms($_GET['search']);

    $view_bag['heading'] = 'Search Results for ' . $_GET['search'];
} else {
    $items = get_terms();
}

view('index', $items);