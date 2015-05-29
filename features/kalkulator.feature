Feature: Obliczenia

  Scenario: Kalkulator a + b
    Given I am on homepage
    When I follow "Kalkulator by MateuszCharkot"
    And I fill in "A" with "3"
    And I fill in "B" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 5"