using System.Globalization;
using Xunit;

namespace XUnit_Tests;

public class LeapAgeTests
{
    
    
    [Fact]
    public void Someone_born_after_most_recent_leap_year_has_leap_age_0()
    {
        // Arrange
        var birthDate   = DateTime.Parse("2025-07-04", new CultureInfo("en-US"));
        var currentDate =  DateTime.Parse("2025-09-16", new CultureInfo("en-US"));

        // Act 
        var actual = Hiker.CalculateLeapAge(birthDate, currentDate);

        Assert.Equal(0, actual);
    }
}

public static class Hiker
{
    public static int CalculateLeapAge(DateTime birthDate, DateTime currentDate)
    {
        return 0;
    }
}