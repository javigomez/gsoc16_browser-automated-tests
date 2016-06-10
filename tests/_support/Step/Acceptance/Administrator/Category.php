<?php
namespace Step\Acceptance\Administrator;

class Category extends \AcceptanceTester
{
	/**
	 * @Given there is a category called :arg1
	 */
	public function thereIsACategoryCalled($categoryTitle)
	{
		$I = $this;
		$categoriesPage = new \Page\Acceptance\Administrator\com_categories\Categories;
		$categoryPage = new \Page\Acceptance\Administrator\com_categories\Category;
		$categoriesPage->newCategory($categoryTitle);

		$categoryPage->fillField('Title', $categoryTitle);
		$categoriesPage->save();
		// ...
	}

	/*
	 * Alternative: not using page object
	 */
	public function thereIsACategoryCalled2($categoryTitle)
	{
		$I = $this;
		$I->amOnPage('administrator/index.php?option=com_categories&extension=com_content');
		$I->click('New');
		$I->fillField('Title', $categoryTitle);
		$I->click('save');
		// ...
	}
}