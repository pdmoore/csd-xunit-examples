<?php

use PHPUnit\Framework\TestCase;


class ExampleTest extends TestCase
{

    # unit tests must begin with the word 'test'
    public function testIndicatesThisIsATest(): void
    {
        $this->assertTrue(true);
    }

    public function testNumberNotDivisibleBy_3or5_ReturnsNumber(): void
    {
        $this->Fizzbuzz = new Fizzbuzz();

        $this->assertEquals("1", $this->Fizzbuzz->of(1));
    }

    /**
     * @dataProvider numbersDivisibleBy3
     */
    public function testNumberDivisibleBy3_ReturnsFizz($number): void
    {
        $this->Fizzbuzz = new Fizzbuzz();

        $this->assertEquals("Fizz", $this->Fizzbuzz->of($number));
    }

    public function numbersDivisibleBy3()
    {
        return [ [3], [6], [99],
        ];
    }

    public function testNumber_Beyond_100_NotSupported(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->Fizzbuzz = new Fizzbuzz();

        $this->Fizzbuzz->of(101);
    }

    public function test_negative_numbers(): void
    {
        $this->markTestSkipped('Ask PO how to correctly handle this case');

        $this->Fizzbuzz = new Fizzbuzz();
        $this->assertEquals("unknown", $this->Fizzbuzz->of(-1));
    }

    # Test will stop executing when any assert fails.
    # The remaining asserts will not be evaluated.
    public function testVerifyTrainerContactInfo(): void
    {
        $this->Contacts = new Contacts();
        $this->actual = $this->Contacts->get("Paul");

        $this->assertEquals("Paul", $this->actual->getFirstName());
        $this->assertEquals("Moore", $this->actual->getLastName());
        $this->assertEquals("@pdmoore", $this->actual->getTitterHandle());
    }

}


# TODO
# - create repo on pdmoore for csd-xunit-examples
# - git init at the Code/R9/csd-examples level
# - add a gitignore, capture any funny php stuff


class Fizzbuzz
{
    public function of($number)
    {
        if ($number > 100) {
            throw new \InvalidArgumentException();
        }

        if ($number % 3 == 0)
        {
            return "Fizz";
        }

        return "1";
    }
}

class ContactInfo
{
    protected $_firstName;
    protected $_lastName;
    protected $_twitterHandle;

    /**
     * ContactInfo constructor.
     * @param $_firstName
     */
    public function __construct($_firstName, $_lastName, $_twitterHandle)
    {
        $this->_firstName = $_firstName;
        $this->_lastName = $_lastName;
        $this->_twitterHandle = $_twitterHandle;
    }

    public function getFirstName() {
        return $this->_firstName;
    }

    public function getLastName() {
        return $this->_lastName;
    }

    public function getTitterHandle() {
        return $this->_twitterHandle;
    }
}

class Contacts
{
    public function get($firstName)
    {
        return new ContactInfo("Paul", "Moore", "@pdmoore");
    }
}