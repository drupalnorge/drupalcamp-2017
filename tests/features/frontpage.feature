@api
Feature: Front page
  Scenario: The front page should be accessible
    Given I am an anonymous user
    When I am on the homepage
    Then I should see "Drupalcamp Oslo" in the "title" region
