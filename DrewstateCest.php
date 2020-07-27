<?php 
//codecept run --steps
//java -jar selenium-3.141.59.jar
class DrewstateCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    	$I->amOnUrl('https://drewestate-dev.bigdropinc.net/');
	    $I->maximizeWindow();
	    $I->wait(3); // wait for 3 secs
	    $I->click('//*[@id="app"]/div[3]/div/div/div[2]/div/div[1]/button[1]/span');
	    $I->click('//*[@id="app"]/div/header/div/button[1]');
	    $I->see('LOGIN');
	    $I->wait(3); // wait for 3 secs
	    $I->fillField('Email','admin@admin.com');
	    $I->fillField('Password','adminadmin');
	    $I->click('Login');
	    $I->wait(3); // wait for 3 secs
	    $I->dontSeeInTitle('Login');
	    $I->makeScreenshot();
    }
}
