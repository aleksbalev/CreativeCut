<?php return array (
  '4718eac5d6a8872ace1b57b93e5381fc' => 
  array (
    'criteria' => 
    array (
      'name' => 'autotemplate',
    ),
    'object' => 
    array (
      'name' => 'autotemplate',
      'path' => 'components/autotemplate/',
      'assets_path' => '',
    ),
  ),
  'ccfbb6d3a5cd74d8835334c478f7b8be' => 
  array (
    'criteria' => 
    array (
      'name' => 'AutoTemplate',
    ),
    'object' => 
    array (
      'id' => 2,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'AutoTemplate',
      'description' => 'Set the template of a new resource automatically to the one it\'s siblings have or, if it has no siblings, to the one it\'s parent has.',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'plugincode' => '/**
 * AutoTemplate for MODx Revolution
 *
 * This plugin sets a new document\'s template automatically to the one it\'s siblings
 * have or, if it has no siblings, to the one it\'s parent has.
 *
 * AutoTemplate is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * AutoTemplate is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Inherit Template; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @author      Maarten     <@maarten>
 * @copyright   CopyrightÃ‚Â (c)Ã‚Â 2009,Ã‚Â Magnatron
 * @license     GPL v2
 *
 * @package     AutoTemplate
 * @subpackage  plugin
 */


if ($modx->event->name === \'OnDocFormRender\') {
	
	// Only when new
	if (empty($scriptProperties[\'mode\']) || $scriptProperties[\'mode\'] !== \'new\') return;
	
	// Siblings
	$c = $modx->newQuery(\'modResource\', array(\'parent\'=>$_REQUEST[\'parent\']));
	$c->sortby(\'id\', \'desc\'); // Reference last added sibling
	$siblings = $modx->getCollection(\'modResource\', $c);
	if(count($siblings)>0){
		$bro = array_shift($siblings);
		$modx->controller->setProperty(\'template\', $bro->get(\'template\'));
		return;
	}
	// No siblings, use parent
	if((int)$_REQUEST[\'parent\']!=0){
		$dad = $modx->getObject(\'modResource\', $_REQUEST[\'parent\']);
		$modx->controller->setProperty(\'template\', $dad->get(\'template\'));
		return;
	}
}

return;',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * AutoTemplate for MODx Revolution
 *
 * This plugin sets a new document\'s template automatically to the one it\'s siblings
 * have or, if it has no siblings, to the one it\'s parent has.
 *
 * AutoTemplate is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * AutoTemplate is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Inherit Template; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @author      Maarten     <@maarten>
 * @copyright   CopyrightÃ‚Â (c)Ã‚Â 2009,Ã‚Â Magnatron
 * @license     GPL v2
 *
 * @package     AutoTemplate
 * @subpackage  plugin
 */


if ($modx->event->name === \'OnDocFormRender\') {
	
	// Only when new
	if (empty($scriptProperties[\'mode\']) || $scriptProperties[\'mode\'] !== \'new\') return;
	
	// Siblings
	$c = $modx->newQuery(\'modResource\', array(\'parent\'=>$_REQUEST[\'parent\']));
	$c->sortby(\'id\', \'desc\'); // Reference last added sibling
	$siblings = $modx->getCollection(\'modResource\', $c);
	if(count($siblings)>0){
		$bro = array_shift($siblings);
		$modx->controller->setProperty(\'template\', $bro->get(\'template\'));
		return;
	}
	// No siblings, use parent
	if((int)$_REQUEST[\'parent\']!=0){
		$dad = $modx->getObject(\'modResource\', $_REQUEST[\'parent\']);
		$modx->controller->setProperty(\'template\', $dad->get(\'template\'));
		return;
	}
}

return;',
    ),
  ),
  '75da151887cc171fd55eb52f514c31d7' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 2,
      'event' => 'OnDocFormRender',
    ),
    'object' => 
    array (
      'pluginid' => 2,
      'event' => 'OnDocFormRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '70c848563adde74e6514704091f1edbf' => 
  array (
    'criteria' => 
    array (
      'category' => 'AutoTemplate',
    ),
    'object' => 
    array (
      'id' => 1,
      'parent' => 0,
      'category' => 'AutoTemplate',
      'rank' => 0,
    ),
  ),
);