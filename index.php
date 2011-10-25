<?php
/**
  * Think PHP Framework 
  *
  * Think PHP Framework is free software: you can redistribute it and/or modify
  * it under the terms of the GNU General Public License as published by
  * the Free Software Foundation, either version 3 of the License, or
  * (at your option) any later version.
  *
  * Think PHP Framework is distributed in the hope that it will be useful,
  * but WITHOUT ANY WARRANTY; without even the implied warranty of
  * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  * GNU General Public License for more details.
  *
  * You should have received a copy of the GNU General Public License
  * along with Think PHP Framework.  If not, see <http://www.gnu.org/licenses/>.
  *
  */

ini_set('display_errors', 1);
ini_set('display_startup_errors', TRUE);
ini_set('error_reporting', E_ALL);


define("__PATH__",__DIR__.DIRECTORY_SEPARATOR);



$system      = 'system';
$application = 'application';
$modules     = $application.DIRECTORY_SEPARATOR."modules";


define("__APP__",    realpath(__PATH__.$application).DIRECTORY_SEPARATOR);
define("__SYSTEM__", realpath(__PATH__.$system).DIRECTORY_SEPARATOR);
define("__MODULES__",realpath(__PATH__.$modules).DIRECTORY_SEPARATOR);



require __SYSTEM__."core.php";
