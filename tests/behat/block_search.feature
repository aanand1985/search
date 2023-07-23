@block @block_search
Feature: Search Course
    In order to search for a course
    As a Moodle user
    I can add search block on the site homepage or on the dashboard or on course view page

    Scenario: Add search block on the dashboard
        When I log in as "admin"
        And I am on dashboard
        And I click on "Customise this page" "button"
        And I add the "Search" block
        When I set the field "Search courses" to "Test Course"
        And I click on "Search" "button" in the "Search" "block"
        Then I should see "Test Course 1"
        And I should see "Test Course 2"

    @javascript
    Scenario: Add search block on the dashboard
        When I log in as "admin"
        And I am on dashboard
        And I click on "Customise this page" "button"
        And I add the "Search" block
        When I set the field "Search courses" to "Test Course"
        And I click on "Search" "button" in the "Search" "block"
        Then I should see "Test Course 1"
        And I should see "Test Course 2"
