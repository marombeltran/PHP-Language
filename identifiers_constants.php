<?php
/* Identifiers
 * --------------------------------------------------------------------------------------------
 * Identifiers are sequences of characters used for naming variables, functions, classes, constants 
 * and another elements of code.
 *
 * Variable names follow the same rules as other labels in PHP. A valid variable name starts with 
 * a letter or underscore, followed by any number of letters, numbers, or underscores. 
 * As a regular expression, it would be expressed thus: ^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$
 */

/* -------------------------------------------------------------------------------------------------------------------------
 * Restriction:
 * -------------------------------------------------------------------------------------------------------------------------
 * $this is a special variable that can't be assigned.
 *
 * The following is a guide for how to best choose names for identifiers in userland PHP code. 
 * When choosing names for any code that creates symbols in the global namespace (\strpos), it is important 
 * to take into account the following guidelines to prevent future versions of PHP from clashing 
 * with your symbols.
 */

