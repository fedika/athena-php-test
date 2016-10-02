<?php
/**
 * Created by PhpStorm.
 * User: fergadipa
 * Date: 10/2/16
 * Time: 2:27 PM
 */

namespace Tests\bdd\pages;


use Athena\Athena;

class ConfirmationRegistrationPage extends AbstractPageCustom
{
    private $SUCCESSFULLY_REGISTERED="Sekarang Anda tinggal mengaktifkan akun Anda!";

    public function __construct()
    {
        parent::__construct(Athena::browser(),'');
    }

    public function verifySuccessfullyRegistered()
    {
        \PHPUnit_Framework_Assert::assertContains($this->SUCCESSFULLY_REGISTERED,$this->getBrowser()->getPageSource());
    }
}