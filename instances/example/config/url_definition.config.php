<?php

/*
 +-----------------------------------------------------------------------------+
 | PATH generation                                                             |
 +-----------------------------------------------------------------------------+
 */

// Symbol separating levels in the path. Traditionally a slash.
// E.g: http://domain.com/folder1/subfolder1/subfolder11
$config["context_separator"] = "/";

// Symbol separating WORDS for the same document. If you want to have a document called "My favourite doc"
// then the url could be like "my-favourite-doc"
$config["word_separator"] = "-";

// How to separate parameters passed to the controller from the url path itself. Example: posts-list:mac:date
$config["params_separator"] = ":";

// This regular expression defines how any URL look like
// If you change any of the characters above, remember to fit them in the expression.
// Note: The query string "?param=value" doesn"t use this expression:
$config["valid_path"] = "/^[a-z0-9-\/:_]+$/i";
