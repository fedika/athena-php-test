<?php
namespace Tests\bdd\contexts;
use Athena\Test\AthenaTestContext;
use Behat\Behat\Tester\Exception\PendingException;
use Tests\bdd\pages\ConfirmationRegistrationPage;
use Tests\bdd\pages\RegistrationPage;


/**
 * Created by PhpStorm.
 * User: fergadipa
 * Date: 10/2/16
 * Time: 2:29 PM
 */
class RegistrationContext extends AthenaTestContext
{
    private $REGISTRATION_PAGE;
    /**
     * @var ConfirmationRegistrationPage
     */
    private $CONFIRMATION_REGISTRATION_PAGE;

    public function __construct()
    {
        $this->REGISTRATION_PAGE=new RegistrationPage();
    }

    /**
     * @Given /^I am in registration page$/
     */
    public function iAmInRegistrationPage()
    {
        $this->REGISTRATION_PAGE->open(true);
    }

    /**
     * @Given /^I input email (.*)$/
     */
    public function iInputEmail($email)
    {
        $this->REGISTRATION_PAGE->inputEmail($email);
    }

    /**
     * @Given /^I input password (.*)$/
     */
    public function iInputPassword($password)
    {
        $this->REGISTRATION_PAGE->inputPassword($password);
    }

    /**
     * @Given /^I re\-input password (.*)$/
     */
    public function iReInputPassword($password)
    {
        $this->REGISTRATION_PAGE->ReinputPassword($password);
    }

    /**
     * @Given /^I click submit$/
     */
    public function iClickSubmit()
    {
        $this->CONFIRMATION_REGISTRATION_PAGE=$this->REGISTRATION_PAGE->clickSubmitButton();
    }

    /**
     * @Then /^I register successfully$/
     */
    public function iRegisterSuccessfully()
    {
        $this->CONFIRMATION_REGISTRATION_PAGE->verifySuccessfullyRegistered();
    }

    /**
     * @Given /^I click user acceptance$/
     */
    public function iClickUserAcceptance()
    {
        $this->REGISTRATION_PAGE->clickUserAccept();
    }
}