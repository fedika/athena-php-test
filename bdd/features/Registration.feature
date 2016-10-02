@registration
Feature: Registration

@parallel-scenario
Scenario Outline:
  Given I am in registration page
  And I input email <email>
  And I input password <password>
  And I re-input password <password>
  And I click user acceptance
  When I click submit
  Then I register successfully

  Examples:
    |email|password|
    |qatesting@yahoo.com|testing123|
