<?php

namespace Journey;

interface Resolver
{
	/**
	 *
	 */
	public function execute(Router $router, $target, array $params = array());
}
