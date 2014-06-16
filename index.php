<?php
/**
 * This file is part of OXID eSales metadata generator.
 *
 * OXID eSales metadata generator is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales metadata generator is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with OXID eSales metadata generator.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2014
 */

require_once dirname( __FILE__ ) . "/config.php";
require_once dirname( __FILE__ ) . "/source/Generator.php";
require_once dirname( __FILE__ ) . "/source/MetaDataGenerator.php";
require_once dirname( __FILE__ ) . "/source/File.php";
require_once dirname( __FILE__ ) . "/source/MetaData.php";
require_once SHOP_PATH . "/bootstrap.php";

$generator = new Generator();
$generator->run();