<?php return array (
  'ab2f2f3c75f0f297422cc3d4e64a4a0c' => 
  array (
    'criteria' => 
    array (
      'name' => 'collections',
    ),
    'object' => 
    array (
      'name' => 'collections',
      'path' => '{core_path}components/collections/',
      'assets_path' => '{assets_path}components/collections/',
    ),
  ),
  '63ffb509c430dffa4c18c65ebf062d46' => 
  array (
    'criteria' => 
    array (
      'key' => 'collections.mgr_date_format',
    ),
    'object' => 
    array (
      'key' => 'collections.mgr_date_format',
      'value' => 'M d',
      'xtype' => 'textfield',
      'namespace' => 'collections',
      'area' => 'manager',
      'editedon' => NULL,
    ),
  ),
  'c791d945f90bb906abb027b2055cc3d9' => 
  array (
    'criteria' => 
    array (
      'key' => 'collections.mgr_time_format',
    ),
    'object' => 
    array (
      'key' => 'collections.mgr_time_format',
      'value' => 'g:i a',
      'xtype' => 'textfield',
      'namespace' => 'collections',
      'area' => 'manager',
      'editedon' => NULL,
    ),
  ),
  '28a32650dfb09b9496eefdd55bbfdcbc' => 
  array (
    'criteria' => 
    array (
      'key' => 'collections.mgr_datetime_format',
    ),
    'object' => 
    array (
      'key' => 'collections.mgr_datetime_format',
      'value' => 'M d, g:i a',
      'xtype' => 'textfield',
      'namespace' => 'collections',
      'area' => 'manager',
      'editedon' => NULL,
    ),
  ),
  '8168e134889245bcd332d508bf6a10fc' => 
  array (
    'criteria' => 
    array (
      'key' => 'collections.user_js',
    ),
    'object' => 
    array (
      'key' => 'collections.user_js',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'collections',
      'area' => 'manager',
      'editedon' => NULL,
    ),
  ),
  '8f79106acf8ff362edbb0f1e7d4c9d95' => 
  array (
    'criteria' => 
    array (
      'key' => 'collections.user_css',
    ),
    'object' => 
    array (
      'key' => 'collections.user_css',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'collections',
      'area' => 'manager',
      'editedon' => NULL,
    ),
  ),
  '7400f020108ab1f42b5e6742b8875b8e' => 
  array (
    'criteria' => 
    array (
      'key' => 'mgr_tree_icon_collectioncontainer',
    ),
    'object' => 
    array (
      'key' => 'mgr_tree_icon_collectioncontainer',
      'value' => 'collectioncontainer',
      'xtype' => 'textfield',
      'namespace' => 'collections',
      'area' => 'manager',
      'editedon' => NULL,
    ),
  ),
  'f2b8e4c0259d973572dd24b9a64fdede' => 
  array (
    'criteria' => 
    array (
      'key' => 'mgr_tree_icon_selectioncontainer',
    ),
    'object' => 
    array (
      'key' => 'mgr_tree_icon_selectioncontainer',
      'value' => 'selectioncontainer',
      'xtype' => 'textfield',
      'namespace' => 'collections',
      'area' => 'manager',
      'editedon' => NULL,
    ),
  ),
  'c006e80bc23a5c59bdf4f373aeccae1b' => 
  array (
    'criteria' => 
    array (
      'key' => 'collections.renderer_image_path',
    ),
    'object' => 
    array (
      'key' => 'collections.renderer_image_path',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'collections',
      'area' => 'manager',
      'editedon' => NULL,
    ),
  ),
  '552d19d78d4169cce4079d7b84a0f4a8' => 
  array (
    'criteria' => 
    array (
      'key' => 'collections.tree_tbar_collection',
    ),
    'object' => 
    array (
      'key' => 'collections.tree_tbar_collection',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'collections',
      'area' => 'manager',
      'editedon' => NULL,
    ),
  ),
  '0c05bf5d12804eeb92ba8774e20c437d' => 
  array (
    'criteria' => 
    array (
      'key' => 'collections.tree_tbar_selection',
    ),
    'object' => 
    array (
      'key' => 'collections.tree_tbar_selection',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'collections',
      'area' => 'manager',
      'editedon' => NULL,
    ),
  ),
  'ad636e86ab93a6048536af6b872f7fb9' => 
  array (
    'criteria' => 
    array (
      'category' => 'Collections',
    ),
    'object' => 
    array (
      'id' => 44,
      'parent' => 0,
      'category' => 'Collections',
      'rank' => 0,
    ),
  ),
  '638676acb3973339cbef8408c571be84' => 
  array (
    'criteria' => 
    array (
      'name' => 'getSelections',
    ),
    'object' => 
    array (
      'id' => 54,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'getSelections',
      'description' => '',
      'editor_type' => 0,
      'category' => 44,
      'cache_type' => 0,
      'snippet' => '/**
 * getSelections
 *
 * DESCRIPTION
 *
 * This snippet is a helper for getResources call.
 * It will allows you to select all linked resources under specific Selection with a usage of getResources snippet.
 * Returns distinct list of linked Resources for given Selections
 *
 * getResources are required
 *
 * PROPERTIES:
 *
 * &sortdir                 string  optional    Direction of sorting by linked resource\'s menuindex. Default: ASC
 * &selections              string  optional    Comma separated list of Selection IDs for which should be retrieved linked resources. Default: empty string
 * &getResourcesSnippet     string  optional    Name of getResources snippet. Default: getResources
 * &excludeResources        string  optional    Comma separated list of Resources to exclude, even though they are in the Selection
 *
 * USAGE:
 *
 * [[getSelections? &selections=`1` &tpl=`rowTpl`]]
 * [[getSelections? &selections=`1` &tpl=`rowTpl` &sortby=`RAND()`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 */

$corePath = $modx->getOption(\'collections.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/collections/\');

/** @var Collections $collections */
$collections = $modx->getService(
    \'collections\',
    \'Collections\',
    $corePath . \'model/collections/\',
    array(
        \'core_path\' => $corePath
    )
);
if (!($collections instanceof Collections)) return \'\';

$getResourcesSnippet = $modx->getOption(\'getResourcesSnippet\', $scriptProperties, \'getResources\');

$getResourcesExists = $modx->getCount(\'modSnippet\', array(\'name\' => $getResourcesSnippet));
if ($getResourcesExists == 0) return \'getResources not found\';

$sortDir = strtolower($modx->getOption(\'sortdir\', $scriptProperties, \'asc\'));
$selections = $modx->getOption(\'selections\', $scriptProperties, \'\');
$sortBy = $modx->getOption(\'sortby\', $scriptProperties, \'\');

$selections = $collections->explodeAndClean($selections);

if ($sortDir != \'asc\') {
    $sortDir = \'desc\';
}

$linkedResourcesQuery = $modx->newQuery(\'CollectionSelection\');

if (!empty($selections)) {
    $linkedResourcesQuery->where(array(
        \'collection:IN\' => $selections
    ));
}

if ($sortBy == \'\') {
    $linkedResourcesQuery->sortby(\'menuindex\', $sortDir);
}

$linkedResourcesQuery->select(array(
    \'resource\' => \'DISTINCT(resource)\'
));

$linkedResourcesQuery->prepare();

$linkedResourcesQuery->stmt->execute();

$linkedResources = $linkedResourcesQuery->stmt->fetchAll(PDO::FETCH_COLUMN, 0);

$excludedResources = $modx->getOption(\'excludeResources\', $scriptProperties, \'\');
$excludedResources = $collections->explodeAndClean($excludedResources);

if (!empty($excludedResources)) {
    $linkedResources = array_diff($linkedResources, $excludedResources);
}

$linkedResources = implode(\',\', $linkedResources);

$properties = $scriptProperties;
unset($properties[\'selections\']);

$properties[\'resources\'] = $linkedResources;
$properties[\'parents\'] = ($properties[\'getResourcesSnippet\'] == \'pdoResources\') ? 0 : -1;

if ($sortBy == \'\') {
    $properties[\'sortby\'] = \'FIELD(modResource.id, \' . $linkedResources . \' )\';
    $properties[\'sortdir\'] = \'asc\';
}

return $modx->runSnippet($getResourcesSnippet, $properties);',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * getSelections
 *
 * DESCRIPTION
 *
 * This snippet is a helper for getResources call.
 * It will allows you to select all linked resources under specific Selection with a usage of getResources snippet.
 * Returns distinct list of linked Resources for given Selections
 *
 * getResources are required
 *
 * PROPERTIES:
 *
 * &sortdir                 string  optional    Direction of sorting by linked resource\'s menuindex. Default: ASC
 * &selections              string  optional    Comma separated list of Selection IDs for which should be retrieved linked resources. Default: empty string
 * &getResourcesSnippet     string  optional    Name of getResources snippet. Default: getResources
 * &excludeResources        string  optional    Comma separated list of Resources to exclude, even though they are in the Selection
 *
 * USAGE:
 *
 * [[getSelections? &selections=`1` &tpl=`rowTpl`]]
 * [[getSelections? &selections=`1` &tpl=`rowTpl` &sortby=`RAND()`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 */

$corePath = $modx->getOption(\'collections.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/collections/\');

/** @var Collections $collections */
$collections = $modx->getService(
    \'collections\',
    \'Collections\',
    $corePath . \'model/collections/\',
    array(
        \'core_path\' => $corePath
    )
);
if (!($collections instanceof Collections)) return \'\';

$getResourcesSnippet = $modx->getOption(\'getResourcesSnippet\', $scriptProperties, \'getResources\');

$getResourcesExists = $modx->getCount(\'modSnippet\', array(\'name\' => $getResourcesSnippet));
if ($getResourcesExists == 0) return \'getResources not found\';

$sortDir = strtolower($modx->getOption(\'sortdir\', $scriptProperties, \'asc\'));
$selections = $modx->getOption(\'selections\', $scriptProperties, \'\');
$sortBy = $modx->getOption(\'sortby\', $scriptProperties, \'\');

$selections = $collections->explodeAndClean($selections);

if ($sortDir != \'asc\') {
    $sortDir = \'desc\';
}

$linkedResourcesQuery = $modx->newQuery(\'CollectionSelection\');

if (!empty($selections)) {
    $linkedResourcesQuery->where(array(
        \'collection:IN\' => $selections
    ));
}

if ($sortBy == \'\') {
    $linkedResourcesQuery->sortby(\'menuindex\', $sortDir);
}

$linkedResourcesQuery->select(array(
    \'resource\' => \'DISTINCT(resource)\'
));

$linkedResourcesQuery->prepare();

$linkedResourcesQuery->stmt->execute();

$linkedResources = $linkedResourcesQuery->stmt->fetchAll(PDO::FETCH_COLUMN, 0);

$excludedResources = $modx->getOption(\'excludeResources\', $scriptProperties, \'\');
$excludedResources = $collections->explodeAndClean($excludedResources);

if (!empty($excludedResources)) {
    $linkedResources = array_diff($linkedResources, $excludedResources);
}

$linkedResources = implode(\',\', $linkedResources);

$properties = $scriptProperties;
unset($properties[\'selections\']);

$properties[\'resources\'] = $linkedResources;
$properties[\'parents\'] = ($properties[\'getResourcesSnippet\'] == \'pdoResources\') ? 0 : -1;

if ($sortBy == \'\') {
    $properties[\'sortby\'] = \'FIELD(modResource.id, \' . $linkedResources . \' )\';
    $properties[\'sortdir\'] = \'asc\';
}

return $modx->runSnippet($getResourcesSnippet, $properties);',
    ),
  ),
  '8100c45f68f523fc08465f6c99d14897' => 
  array (
    'criteria' => 
    array (
      'name' => 'Collections',
    ),
    'object' => 
    array (
      'id' => 19,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Collections',
      'description' => '',
      'editor_type' => 0,
      'category' => 44,
      'cache_type' => 0,
      'plugincode' => '/**
 * Collections
 *
 * DESCRIPTION
 *
 * This plugin inject JS to handle proper working of close buttons in Resource\'s panel (OnDocFormPrerender)
 * This plugin handles setting proper show_in_tree parameter (OnBeforeDocFormSave, OnResourceSort)
 *
 * @var modX $modx
 * @var array $scriptProperties
 */
$corePath = $modx->getOption(\'collections.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/collections/\');
/** @var Collections $collections */
$collections = $modx->getService(
    \'collections\',
    \'Collections\',
    $corePath . \'model/collections/\',
    array(
        \'core_path\' => $corePath
    )
);

$className = \'Collections\' . $modx->event->name;

$modx->loadClass(\'CollectionsPlugin\', $collections->getOption(\'modelPath\') . \'collections/events/\', true, true);
$modx->loadClass($className, $collections->getOption(\'modelPath\') . \'collections/events/\', true, true);

if (class_exists($className)) {
    /** @var CollectionsPlugin $handler */
    $handler = new $className($modx, $scriptProperties);
    $handler->run();
}

return;',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Collections
 *
 * DESCRIPTION
 *
 * This plugin inject JS to handle proper working of close buttons in Resource\'s panel (OnDocFormPrerender)
 * This plugin handles setting proper show_in_tree parameter (OnBeforeDocFormSave, OnResourceSort)
 *
 * @var modX $modx
 * @var array $scriptProperties
 */
$corePath = $modx->getOption(\'collections.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/collections/\');
/** @var Collections $collections */
$collections = $modx->getService(
    \'collections\',
    \'Collections\',
    $corePath . \'model/collections/\',
    array(
        \'core_path\' => $corePath
    )
);

$className = \'Collections\' . $modx->event->name;

$modx->loadClass(\'CollectionsPlugin\', $collections->getOption(\'modelPath\') . \'collections/events/\', true, true);
$modx->loadClass($className, $collections->getOption(\'modelPath\') . \'collections/events/\', true, true);

if (class_exists($className)) {
    /** @var CollectionsPlugin $handler */
    $handler = new $className($modx, $scriptProperties);
    $handler->run();
}

return;',
    ),
  ),
  '3b38a7f1867fa7583bf439dcedaf112a' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 19,
      'event' => 'OnManagerPageInit',
    ),
    'object' => 
    array (
      'pluginid' => 19,
      'event' => 'OnManagerPageInit',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '410933ba544bf873c6a23193771110ef' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 19,
      'event' => 'OnBeforeDocFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 19,
      'event' => 'OnBeforeDocFormSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'c3e5ff8e7a9dc89eebf5581157895ae2' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 19,
      'event' => 'OnResourceBeforeSort',
    ),
    'object' => 
    array (
      'pluginid' => 19,
      'event' => 'OnResourceBeforeSort',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '1cc36211d5d3ea996b68256a62e0dad1' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 19,
      'event' => 'OnDocFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 19,
      'event' => 'OnDocFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '17d792cf744a4e4cf246f8faa86327d9' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 19,
      'event' => 'OnBeforeEmptyTrash',
    ),
    'object' => 
    array (
      'pluginid' => 19,
      'event' => 'OnBeforeEmptyTrash',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '86cdff1767e283cea93bbe24bf927402' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 19,
      'event' => 'OnDocFormRender',
    ),
    'object' => 
    array (
      'pluginid' => 19,
      'event' => 'OnDocFormRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '56839dad26bdfd8d2d83ea865df06917' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 19,
      'event' => 'OnManagerPageBeforeRender',
    ),
    'object' => 
    array (
      'pluginid' => 19,
      'event' => 'OnManagerPageBeforeRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '9d24722baf49ca454693a6360f1b890e' => 
  array (
    'criteria' => 
    array (
      'namespace' => 'collections',
      'controller' => 'index',
    ),
    'object' => 
    array (
      'id' => 6,
      'namespace' => 'collections',
      'controller' => 'index',
      'haslayout' => 1,
      'lang_topics' => 'collections:default',
      'assets' => '',
      'help_url' => '',
    ),
  ),
  '8b518ad8e627dbdb5f5df1daf8017416' => 
  array (
    'criteria' => 
    array (
      'text' => 'collections.menu.collection_templates',
    ),
    'object' => 
    array (
      'text' => 'collections.menu.collection_templates',
      'parent' => 'components',
      'action' => '6',
      'description' => 'collections.menu.collection_templates_desc',
      'icon' => '',
      'menuindex' => 7,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'core',
    ),
  ),
);