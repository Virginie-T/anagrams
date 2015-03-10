<?php

    class Anagram
    {

        function detectAnagram($input_word) {

        $list = array ('a', 'b', 'c');
        $input_lowerCase = strtolower($input_word);

        foreach ($list as $word_of_the_list) {

            if ($input_lowerCase == $word_of_the_list) {
                return $word_of_the_list;
            }
            else {
                return "false";
            }
        }
    }


}

?>
