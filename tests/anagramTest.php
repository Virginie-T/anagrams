<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_anagram_singleletter()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = 'a';
            $list = 'a';

            //Act
            $result = $test_Anagram->detectAnagram($input, $list);

            //assert
            $this->assertEquals('a', $result);
        }

        function test_anagram_multiletter()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = 'a';
            $list = array('a', 'b', 'c');


            //Act
            $result = $test_Anagram->detectAnagram($input, $list);

            //assert
            $this->assertEquals('a', $result);

        }
        
        function test_anagram_oneword()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = 'on';
            $list = 'no';

            //Act
            $result = $test_Anagram->detectAnagram($input, $list);

            //assert
            $this->assertEquals('no', $result);

        }

        function test_anagram_multiword()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = 'on';
            $list = array("no", "to", "if");

            //Act
            $result = $test_Anagram->detectAnagram($input, $list);

            //assert
            $this->assertEquals('no', $result);
        }


    }

?>
