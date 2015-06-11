Feature: Obliczenia

  Scenario: Pole trapezu
    Given I am on homepage
    When I follow "Pole trapezu by michaldebowski"
    And I fill in "A" with "2"
    And I fill in "B" with "4"
    And I fill in "H" with "5"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 15"