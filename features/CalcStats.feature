Feature: Calculate Statistics
    As a statistician
    I want to process a list of integers
    So that I can calculate the minimum, maximum, count, and average of the list's elements

Scenario: List is empty
        Given the list contains ""
        When I calculate the statistics
        Then the minimum should equal ""
        And the maximum should equal ""
        And the count should equal ""
        And the average should equal ""
