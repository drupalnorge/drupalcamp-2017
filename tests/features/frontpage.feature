@api
Feature: Front page
  Scenario: There should be more than 1 article on the frontpage.
    Given I am an anonymous user
    When I am on the homepage
    Then I should see "Drupalcamp Oslo" in the "title" region
