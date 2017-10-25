<?php
function hook_twemoji_render_includes($data)
{
    $data['css_files'][] = PluginManager::$PLUGINS_PATH . '/twemoji/assets/css/twemoji.css';

    return $data;
}

function hook_twemoji_render_footer($data)
{

    $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/twemoji/assets/js/twemoji.min.js';
    $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/twemoji/assets/js/twemoji-config.js';

    return $data;
}
