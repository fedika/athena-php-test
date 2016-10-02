<?php
/**
 * Created by PhpStorm.
 * User: fergadipa
 * Date: 10/2/16
 * Time: 2:13 PM
 */

namespace Tests\bdd\pages;


use Athena\Athena;

class RegistrationPage extends AbstractPageCustom
{
    private $EMAIL_ID = "userEmail";
    private $PASSWORD_ID = "userPass";
    private $RETYPE_PASSWORD_ID = 'userPass-repeat';
    private $USER_ACCEPT_CHECK_ID = 'acceptCheck';
    private $SUBMIT_BUTTON_ID = 'se_userSignIn';

    public function __construct()
    {
        parent::__construct(Athena::browser(), 'registration');
    }

    public function inputEmail($email_value)
    {
        $this->typeTextByElementID($this->EMAIL_ID,$email_value);
        return $this;
    }

    public function inputPassword($passwordValue)
    {
        $this->typeTextByElementID($this->PASSWORD_ID,$passwordValue);
        return $this;
    }

    public function ReinputPassword($passwordValue)
    {
        $this->typeTextByElementID($this->RETYPE_PASSWORD_ID,$passwordValue);
        return $this;
    }

    public function clickUserAccept()
    {
        $this->clickByElementID($this->USER_ACCEPT_CHECK_ID);
        return $this;
    }

    public function clickSubmitButton()
    {
        $this->clickByElementID($this->SUBMIT_BUTTON_ID);
        return new ConfirmationRegistrationPage();
    }
}