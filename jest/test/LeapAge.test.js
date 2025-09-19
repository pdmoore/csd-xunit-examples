function calculateLeapAge(birth_date, current_date) {
    return 0;
}






it('someone born after most recent leap year has a leap age of 0', () => {
    // Arrange
    var birth_date   = new Date("2025-07-04");
    var current_date = new Date("2025-09-01");

    // Act
    var actual = calculateLeapAge(birth_date, current_date);

    // Assert
    expect(actual).toBe(0);
});