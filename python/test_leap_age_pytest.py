class Hiker:
    def calculate_leap_age(self, birth_date, current_date):
        return 0






def test_someone_born_after_most_recent_leap_year_has_leap_age_0():
    # Arrange
    birth_date   = "2025-07-04"
    current_date = "2025-09-01"

    # Act
    actual = Hiker().calculate_leap_age(birth_date, current_date)

    # Assert
    assert actual == 0
