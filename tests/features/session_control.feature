@api
Feature: Session control
  Scenario: Anonymous users should not be able to post sessions
    Given I am viewing a "session" content with the title "my session"
    And I run drush "cset session_control.settings session.enabled 1"
    Then append "/edit" to the URL
    Then the response status code should be 403
