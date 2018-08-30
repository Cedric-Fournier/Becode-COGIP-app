<?php
    
    function inputFilter($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function filterSanitizeString($varToFilter) {
        $error = "";
        if (!filter_var($varToFilter, FILTER_SANITIZE_STRING)) {
            $error = "Invalid format";
        }
        return $error;
    }

    function filterSanitizeAndValidateEmail($varToFilter) {
        $error = "";
        if (!filter_var($varToFilter, FILTER_SANITIZE_EMAIL)) {
            $error = "Invalid format s";
        } else if (!filter_var(filter_var($varToFilter, FILTER_SANITIZE_EMAIL), FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid format v";
        }
        return $error;
    }

    function filterSanitizeNumberInt($varToFilter) {
        $error = "";
        if (!filter_var($varToFilter, FILTER_SANITIZE_NUMBER_INT)) {
            $error = "Invalid format";
        }
        return $error;
    }

?>