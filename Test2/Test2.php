<?php

class PalindromeChecker
{
    public static function isPalindrome($text) {
        return false;
    }
}

var_dump(PalindromeChecker::isPalindrome("madam"));
var_dump(PalindromeChecker::isPalindrome("Madam"));
var_dump(PalindromeChecker::isPalindrome("Madam, I'm Adam"));
var_dump(PalindromeChecker::isPalindrome("Never odd or even"));
var_dump(PalindromeChecker::isPalindrome("Doc, note: I dissent. A fast never prevents a fatness. I diet on cod"));
