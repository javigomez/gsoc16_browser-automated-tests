Feature: site offline
  In order to do deep changes in the website
  As administrator
  I need to be able to switch the site temporarily offline

  Background:

  Scenario: Custom offline message
    Given I am registered administrator named "admin"
    And I login into Joomla Administrator with username "admin" and password "admin"
    When I set my site offline
    And I add an offline message "site under construction"
    Then I should see the message "site under construction" in the frontpage