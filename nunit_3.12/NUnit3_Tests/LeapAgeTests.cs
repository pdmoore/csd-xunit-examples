using System;
using NUnit.Framework;

namespace NUnit3_Tests
{
    [TestFixture]
    public class LeapAgeTests
    {
        [Test]
        public void Someone_born_after_most_recent_leap_year_has_leap_age_0()
        {
            // Arrange
            DateTime birthDate   = DateTime.Parse("2025-07-04");
            DateTime currentDate =  DateTime.Parse("2025-09-16");

            // Act 
            var actual = Hiker.CalculateLeapAge(birthDate, currentDate);
            
            // Assert
            Assert.That(actual, Is.EqualTo(0));
        } 
    }

    public static class Hiker
    {
        public static int CalculateLeapAge(DateTime birthDate, DateTime currentDate)
        {
            return 0;
        }
    }
}