# features/buy.yml
Feature: Buy Clothing Item
  In order to buy a clothing item
  As a shopper
  I need to press buy next to an item

  Scenario: Buy red hat
    Given I am on "/search"
    And I fill in "search_input" with "red hat"
    And I press "submit"
    Then I press "buy_redhat"
    Then I should see "You purchased 1 red hat!"