package com.rocketnine.junitexamples;

import org.junit.jupiter.api.Assertions;
import org.junit.jupiter.api.Test;

import java.time.LocalDate;

class LeapAgeTests {

    @Test
    void someone_born_after_most_recent_leap_year_has_leap_age_0() {
        // Arrange
        LocalDate birthDate = LocalDate.parse("2025-07-04");
        LocalDate currentDate = LocalDate.parse("2025-09-01");

        // Act
        int actual = Hiker.calculateLeapAge(birthDate, currentDate);

        // Assert
        Assertions.assertEquals(0, actual);
    }

    @Test
    void someone_born_after_most_recent_leap_year_has_leap_age_0_CONDENSED() {
        // Arrange - Act - Assert all in one line
        Assertions.assertEquals(0, Hiker.calculateLeapAge(LocalDate.parse("2025-07-04"), LocalDate.parse("2025-09-01")));
    }

}