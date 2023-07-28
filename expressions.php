<?php
/* By default, variables are always assigned by value. That is to say, when you assign an expression 
 * to a variable, the entire value of the original expression is copied into the destination variable. 
 * This means, for instance, that after assigning one variable's value to another, changing one of 
 * those variables will have no effect on the other.
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

/* -------------------------------------------------------------------------------------------------------------------------
 * Expressions
 * -------------------------------------------------------------------------------------------------------------------------
 * Expressions are the most important building blocks of PHP. In PHP, almost anything you write is 
 * an expression. The simplest yet most accurate way to define an expression is "anything that has a value".

 * Every single expression in PHP has one of the following built-in types depending on its value:
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

