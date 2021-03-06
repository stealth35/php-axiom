<?php
/**
 * Axiom: a lightweight PHP framework
 *
 * @copyright Copyright 2010-2011, Benjamin Delespierre (http://bdelespierre.fr)
 * @licence http://www.gnu.org/licenses/lgpl.html Lesser General Public Licence version 3
 */

require_once LIBRARY_PATH . "/Database.class.php";

Database::setConfig(array(
    'host' => 'localhost',
    'database' => 'axiom',
    'username' => 'root',
    'password' => '',
    'type' => 'mysql',
));

Database::open();