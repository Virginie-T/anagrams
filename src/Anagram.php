<?php

    class Anagram
    {

        function detectAnagram($input_word, $list) {

        $input_lowerCase = strtolower($input_word);

        $split_input_word = str_split($input_lowerCase);

        sort($split_input_word);


        foreach ($list as $word_list) {

            $word_lowerCase = strtolower($word_list);

            $split_word = str_split($word_lowerCase);

            sort($split_word);

                if ($split_word == $split_input_word) {
                    return $input_lowerCase;
                }
                else {
                    return $input_lowerCase;
                }

                array_push($input_return, $input_lowerCase);
            }

        return $input_return;

}




?>

<!--
    foreach ($list as $word_list) {
        $split_word = str_split($word_list);
    }

    // $split_list = str_split($list);
    $split_input_word = str_split($input_lowerCase);
    sort($split_word);
    sort($split_input_word);

    foreach ($split_word) {
        if ($split_input_word == $split_word) {
            return $word_list;
        }
        else {
            return "false";
        } -->
