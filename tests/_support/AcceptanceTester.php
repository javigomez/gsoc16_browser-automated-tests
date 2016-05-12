<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * @Given Joomla CMS is installed
     */
    public function joomlaCMSIsInstalled()
    {
        $I = $this;
        $I->comment('joomla is installed');
    }

    /**
     * @Then I see administrator dashboard
     */
    public function iSeeAdministratorDashboard()
    {
        $I = $this;
        $I->waitForText('Control Panel', 60, ['css' => 'H1.page-title']);
        $I->see('Control Panel', ['css' => 'H1.page-title']);
    }
}
