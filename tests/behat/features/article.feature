@api
Feature: Test article content type 

Scenario: Go to article page
  Given I am on "/test-article"
  Then I should see "Test Article"
