import unittest



class Hiker:
    def calculate_leap_age(self, birth_date, current_date):
        return 0


# pytest style assert
def test_someone_born_after_most_recent_leap_year_has_leap_age_0():
    # Arrange
    birth_date = "2025-07-04"
    current_date = "2025-09-01"

    # Act
    actual = Hiker().calculate_leap_age(birth_date, current_date)

    # Assert
    assert actual == 0





# unittest style assert
class LeapAgeTests(unittest.TestCase):
    def test_someone_born_after_most_recent_leap_year_has_leap_age_0(self):
        # Arrange
        birth_date = "2025-07-04"
        current_date = "2025-09-01"

        # Act
        actual = Hiker().calculate_leap_age(birth_date, current_date)

        # Assert
        self.assertEqual(0, actual)
