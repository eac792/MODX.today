<?php
/**
 * migx
 *
 * Copyright 2010-2011 by Bruno Perner <b.perner@gmx.de>
 *
 * migx is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * migx is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * migx; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package migx
 */
/**
 * Input TV render for migx
 *
 * @package migx
 * @subpackage tv
 */

$corePath = $modx->getOption('redactor.core_path', null, $modx->getOption('core_path') . 'components/redactor/');
return $modx->smarty->fetch($corePath.'elements/tvs/tpl/inputproperties.tpl');
