<?php
namespace Tests\bdd\pages;
/**
 * Created by PhpStorm.
 * User: fergadipa
 * Date: 9/21/16
 * Time: 8:28 PM
 */

use Athena\Page\AbstractPage;
use Facebook\WebDriver\WebDriverSelect;

abstract class AbstractPageCustom extends AbstractPage
{
    public function getElementCurrentPageByID($ELEMENT_ID)
    {
        return $this->getBrowser()->getCurrentPage()->find()->elementWithId($ELEMENT_ID);
    }

    public function getElementCurrentPageByLinkText($ELEMENT_ID)
    {
        return $this->getBrowser()->getCurrentPage()->getElement()->withLinkText($ELEMENT_ID);
    }

    public function getElementCurrentPageByXPath($ELEMENT_XPATH)
    {
        return $this->getBrowser()->getCurrentPage()->getElement()->withXpath($ELEMENT_XPATH);
    }

    public function getElementCurrentPageByCss($ELEMENT_CSS)
    {
        return $this->getBrowser()->getCurrentPage()->getElement()->withCss($ELEMENT_CSS);
    }

    public function getElementCurrentPageByName($ELEMENT_NAME)
    {
        return $this->getBrowser()->getCurrentPage()->getElement()->withName($ELEMENT_NAME);
    }

    public function typeTextByElementID($ELEMENT_ID, $TEXT_VALUE)
    {
        $this->getElementCurrentPageByID($ELEMENT_ID)->sendKeys($TEXT_VALUE);
        return $this;
    }

    public function selectRadioButtonByElementID($ELEMENT_ID)
    {
        $this->getElementCurrentPageByID($ELEMENT_ID)->click();
        return $this;
    }

    public function selectCheckBoxByElementID($ELEMENT_ID)
    {
        $this->getElementCurrentPageByID($ELEMENT_ID)->click();
        return $this;
    }

    public function clickByElementID($ELEMENT_ID)
    {
        $this->getElementCurrentPageByID($ELEMENT_ID)->click();
        return $this;
    }

    public function clickByElementXPath($ELEMENT_XPATH)
    {
        $this->getElementCurrentPageByXPath($ELEMENT_XPATH);
        return $this;
    }

    public function clickByLinkText($LINK_TEXT)
    {
        $this->getElementCurrentPageByLinkText($LINK_TEXT)->thenFind()->asHtmlElement()->click();
    }

    public function verifyIsDisplayedByElementID($ELEMENT_ID)
    {
        $this->getElementCurrentPageByID($ELEMENT_ID)->isDisplayed();
    }

    public function verifyIsDisplayedByLinkText($LINK_TEXT)
    {
        return $this->getElementCurrentPageByLinkText($LINK_TEXT)->thenFind()->asHtmlElement()->isDisplayed();
    }

    public function verifyIsDisplayedByXPath($ELEMENT_XPATH)
    {
        return $this->getElementCurrentPageByXPath($ELEMENT_XPATH)->thenFind()->asHtmlElement()->isDisplayed();
    }

    public function verifyIsDisplayedByCss($ELEMENT_CSS)
    {
        return $this->getElementCurrentPageByCss($ELEMENT_CSS)->thenFind()->asHtmlElement()->isDisplayed();
    }

    public function verifyIsDisplayedByName($ELEMENT_NAME)
    {
        return $this->getElementCurrentPageByName($ELEMENT_NAME)->thenFind()->asHtmlElement()->isDisplayed();
    }

    public function submitByElementID($ELEMENT_ID)
    {
        $this->getElementCurrentPageByID($ELEMENT_ID)->submit();
    }

    public function chooseDropdownOptionByVisibleText($ELEMENT_ID,$VISIBLE_OPTION_TEXT)
    {
        $dropdownOption=new WebDriverSelect($this->getElementCurrentPageByID($ELEMENT_ID));
        $dropdownOption->selectByVisibleText($VISIBLE_OPTION_TEXT);
    }
}
