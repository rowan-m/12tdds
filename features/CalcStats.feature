Feature: Calculate Statistics
    As a statistician
    I want to process a list of integers
    So that I can calculate the minimum, maximum, count, and average of the list's elements

    Scenario: List is empty
        Given the list contains ""
        When I calculate the statistics
        Then the minimum should equal ""
        And the maximum should equal ""
        And the count should equal "0"
        And the average should equal ""

    Scenario: List contains one integer
        Given the list contains "42"
        When I calculate the statistics
        Then the minimum should equal "42"
        And the maximum should equal "42"
        And the count should equal "1"
        And the average should equal "42"

    Scenario: List contains several integers
        Given the list contains "-22, -9, 6, -39, 100, -89, 30, -28"
        When I calculate the statistics
        Then the minimum should equal "-89"
        And the maximum should equal "100"
        And the count should equal "8"
        And the average should equal "-6.375"
