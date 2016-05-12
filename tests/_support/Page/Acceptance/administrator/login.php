<?php
namespace Page\Acceptance;

class login
{
    // include url of current page
    public static $URL = 'administator/index.php';

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    public function login($username, $password)
    {
        $I = $this;
        $I->amOnPage('administrator/');
        $I->fillField('Username', $username);
        $I->fillField(['id' => 'mod-login-password'], $password);
        $I->click('Log in');
    }
}
