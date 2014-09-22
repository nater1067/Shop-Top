Feature: Clothes Search
  In order to search for clothes
  As a shopper
  I need to enter a search query and press submit

  Scenario: Search for red hat
    Given I am on "/search"
    And I fill in "search_input" with "red hat"
    And press "submit"
    Then I should see "red hat - The best clothing item you will ever buy."

  Scenario: Search for empty string
    Given I am on "/search"
    And press "submit"
    Then I should not see "Results"