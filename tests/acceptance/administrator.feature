Feature: administrator login
  In order to manage my web application
  As an administrator
  I need to be able to login

  Scenario: Successful login
    Given I am a registered administrator user named "admin"
    When login into Joomla administrator with username "admin" and password "admin"
    Then I should see administrator dashboard
