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

/* Identifiers
 * --------------------------------------------------------------------------------------------
 * Identifiers are sequences of characters used for naming variables, functions, classes, constants 
 * and another elements of code.
 *
 * Variable names follow the same rules as other labels in PHP. A valid variable name starts with 
 * a letter or underscore, followed by any number of letters, numbers, or underscores. 
 * As a regular expression, it would be expressed thus: ^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$
 */

/**
 * -------------------------------------------------------------------------------------------------------------------------
 * Restriction:
 * -------------------------------------------------------------------------------------------------------------------------
 * $this is a special variable that can't be assigned.
 *
 * The following is a guide for how to best choose names for identifiers in userland PHP code. 
 * When choosing names for any code that creates symbols in the global namespace (\strpos), it is important 
 * to take into account the following guidelines to prevent future versions of PHP from clashing 
 * with your symbols.
 */

/**
 * -------------------------------------------------------------------------------------------------------------------------
 * Global Namespace 
 * -------------------------------------------------------------------------------------------------------------------------
 * Here is an overview of code constructs that go into the global namespace:
 * - functions
 * - classes
 * - interfaces
 * - constants (not class constants)
 * - variables defined outside of functions/methods (nested functions are allowed)
 *
 * Some Rules
 * - Function names use underscores between words, while class names use both the camelCase and PascalCase rules.
 * - PHP will prefix any global symbols of an extension with the name of the extension. curl_close(), mysql_query()
 * - Iterators and Exceptions are however simply postfixed with "Iterator" and "Exception." ArrayIterator, LogicException.
 * - PHP reserves all symbols starting with __ as magical. It is recommended that you do not create 
 *   symbols starting with __ in PHP unless you want to use documented magical functionality.
 *   __get(), __autoload().
 *
 * Tips
 * In order to write future-proof code, it is recommended that you don't place many variables, functions 
 * or classes in the global namespace. This will prevent naming conflicts with 3rd party code as well as 
 * possible future additions to the language.
 *
 * - One common way to prevent naming conflicts of functions and classes is to add them to their own 
 *   dedicated namespace.
 *
 *   <?php
 *   namespace MyProject;
 *
 *   function my_function() {
 *      return true;
 *   }
 *
 *   \MyProject\my_function();
 */

