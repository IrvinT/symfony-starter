<?php

namespace AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AdminBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
