<?php
/* -------------------------------------------------------------------------------------------------------------------------
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
