Feature: Obliczenia

  Scenario: pole kwadratu
    Given I am on homepage
    When I follow "Pole kwadratu by krzysztof90"
    And I fill in "A" with "5"
    And I fill in "B" with "100"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 500"
