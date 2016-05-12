<?php
namespace Step\Acceptance;

class AdministratorLogin extends \AcceptanceTester
{
	/**
	 * @Given I am a registered administrator user named :arg1
	 */
	public function iAmARegisteredAdministratorUserNamed($arg1)
	{
		$I = $this;
		$I->comment('I am a super admin');
	}

	/**
	 * @When login into Joomla administrator with username :arg1 and password :arg1
	 */
	public function loginIntoJoomlaAdministratorWithUsernameAndPassword($username, $password)
	{
		$I = $this;
		\Page\Acceptance\administrator\login::login;
	}

	/**
	 * @Then I should see administrator dashboard
	 */
	public function iShouldSeeAdministratorDashboard()
	{
		$I = $this;
		$I->waitForText('Control Panel', 60, ['css' => 'H1.page-title']);
		$I->see('Control Panel', ['css' => 'H1.page-title']);
	}
}