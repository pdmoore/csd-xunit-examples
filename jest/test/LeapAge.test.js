const { describe, it, expect } = require('@jest/globals')

function calculateLeapAge(birth_date, current_date) {
    return 0;
}


describe('LeapAge examples', () => {

    it('someone born after most recent leap year has a leap age of 0', () => {
        // Arrange
        const birth_date = new Date("2025-07-04");
        const current_date = new Date("2025-09-01");

        // Act
        let actual = calculateLeapAge(birth_date, current_date);

        // Assert
        expect(actual).toBe(0);
    });
})


