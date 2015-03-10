<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_anagram_singleletter()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = 'a';

            //Act
            $result = $test_Anagram->detectAnagram($input);

            //assert
            $this->assertEquals('a', $result);
        }

        function test_anagram_multiletter()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = 'a';

            //Act
            $result = $test_Anagram->detectAnagram($input);

            //assert
            $this->assertEquals('a', $result);

        }



    }

?>
