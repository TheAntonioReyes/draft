<?php

App::missing(function($exception) {
	$layout = View::make("layout.main");
	$layout->content = View::make("errors.404");
	return Response::make($layout, 404);
});