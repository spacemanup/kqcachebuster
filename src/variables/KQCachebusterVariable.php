<?php
/**
 * KQCachebuster plugin for Craft CMS 3.x
 *
 * KQCachebuster
 *
 * @link      www.kreuzundquer.ch
 * @copyright Copyright (c) 2017 kreuz+quer GmbH
 */

namespace kreuzundquer\kqcachebuster\variables;

use Craft;
use kreuzundquer\kqcachebuster\KQCachebuster;

/**
 * KQCachebuster Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.kQCachebuster }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    kreuz+quer GmbH
 * @package   KQCachebuster
 * @since     1.0.0
 */
class KQCachebusterVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.kQCachebuster.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.kQCachebuster.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */

    public function printVersion()
    {
        $version_str = KQCachebuster::$plugin->kQCachebusterService->readVersionFile();
        return $version_str;
    }

    public function cacheBuster()
    {
        $settings = KQCachebuster::$plugin->getSettings();

        $version_str = KQCachebuster::$plugin->kQCachebusterService->readVersionFile();
        $cache_buster_str = empty($settings['cacheBusterString']) ? '?v=' : $settings['cacheBusterString'];

        return $cache_buster_str . $version_str;
    }
}
