<?php
namespace Page\Acceptance\Administrator;

class Categories extends \AcceptanceTester
{
	public function newCategory($title)
	{
		$I = $this;
		$I->click('New');
		// ...
	}
}
