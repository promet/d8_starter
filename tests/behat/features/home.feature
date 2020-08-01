@api
Feature: Test home page 

Scenario: Go to home page
  Given I am on "/"
  Then I should see "Promet Drupal Starter"
