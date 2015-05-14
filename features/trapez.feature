Feature: Obliczenia

  Scenario: TrapezFurtakM
    Given I am on homepage
    When I follow "Trapez Area by furtakm"
    And I fill in "A" with "5"
    And I fill in "B" with "7"
    And I fill in "H" with "2"
    And I press "Calculate"
    Then I should see "Result: 12"
