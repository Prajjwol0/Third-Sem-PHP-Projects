<!-- 8. Develop a page that includes a header file header.php using include_once() and a database
connection file db_connect.php using require_once(). Explain the difference in case the files are
missing.
 -->

 <?php
include_once('header.php');
require_once('db_connect.php')
 ?>

 <!-- Explanation:
include_once()

Includes the file if it exists.

If the file is missing, PHP shows a warning, but the rest of the page still runs.

require_once()

Includes the file if it exists.

If the file is missing, PHP shows a fatal error and stops running the page. -->