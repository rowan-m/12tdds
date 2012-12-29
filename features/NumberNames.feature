Feature: Number Names
  As a writer of cheques
  I want to process a numeric representation of an integer
  So that I can produce its equivalent representation in words

  Scenario Outline: Number has a unique name
    Given the numeric representation <digits>
    When I convert the integer
    Then the representation in words should be <words>

    Examples:
      | digits | words  |
      | 0      | "zero" |
