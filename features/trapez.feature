Feature: Obliczenia

  Scenario: TrapezFurtakM
    Given I am on homepage
    When I follow "Trapez by furtakm"
    And I fill in "a" with "5"
    And I fill in "b" with "7"
    And I fill in "h" with "2"
    And I press "Result"
    Then I should see "Result: 12"
