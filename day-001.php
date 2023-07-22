<?php

/**
 * PHP, which stands for "PHP: Hypertext Preprocessor" is a widely-used Open Source general-purpose 
 * scripting language that is especially suited for web development and can be embedded into HTML. 
 * Its syntax draws upon C, Java, and Perl, and is easy to learn. 
 *
 * - The main goal of the language is to allow web developers to write dynamically generated web pages 
 *   quickly, but you can do much more with PHP.
 *
 * - Language reference ******
 * - Function referece
 * - Features
 */

/* 1.1 Identifiers
 * --------------------------------------------------------------------------------------------
 * Variable names follow the same rules as other labels in PHP. A valid variable name starts with 
 * a letter or underscore, followed by any number of letters, numbers, or underscores. 
 * As a regular expression, it would be expressed thus: ^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$
 */

/* Variables in PHP are represented by a dollar sign followed by the name of the variable. 
 * The variable name is case-sensitive.
 */

/* Every single expression in PHP has one of the following built-in types depending on its value:
 * - null
 * - bool [true, false, TRUE, FALSE]
 * - int
 * - float (floating-point number)
 * - string
 * - array
 * - object
 * - callable
 * - resource
 */

/* The null type is PHP's unit type, i.e. it has only one value: null.
 */
NULL;
$a = null;

'';
'\n';
"\n";

/**
 * Integer Constansts */
3; // decimal
0o234; // octal
0x1B; // hexadecimal
0b11111110; // binary

/**
 * Decimal Constants */
3_30;
3.30;
1.2e3;
7E-10;

