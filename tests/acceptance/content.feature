Feature: manage web content
  In order to create content articles for my website
  As an administrator
  I need be able to create and manage content articles

  Background:
    Given I am Logged in into Joomla administrator
    And I am at administrator Control Panel
    And there is a category called "My Category"

  Scenario: Create an Article on a specific category
    When I visit articles page
    And I create a new article
    And I fill mandatory fields for creating an article
    And I assign "My Category" to the article
    And I save the new article
    Then the article should be created

  Scenario: Feature an Article