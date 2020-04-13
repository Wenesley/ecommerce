<?php

use \Wenesley\Page;

$app->get("/", function() {

	$page = new Page();

	$page->setTpl("index");
});


?>