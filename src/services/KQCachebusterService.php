<?php
/**
 * KQCachebuster plugin for Craft CMS 3.x
 *
 * KQCachebuster
 *
 * @link      www.kreuzundquer.ch
 * @copyright Copyright (c) 2017 kreuz+quer GmbH
 */

namespace kreuzundquer\kqcachebuster\services;

use Craft;
use craft\base\Component;
use kreuzundquer\kqcachebuster\KQCachebuster;

/**
 * KQCachebuster Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    kreuz+quer GmbH
 * @package   KQCachebuster
 * @since     1.0.0
 */
class KQCachebusterService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     KQCachebuster::$plugin->kQCachebuster->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`

        return $result;
    }

    public function readVersionFile()
    {
        $settings = KQCachebuster::$plugin->getSettings();

        if (!$settings->pathToVersionTxt)
        {
            throw new Exception('Die Einstellung "Pfad" ist nicht in den Plugin Einstellungen angegeben.');
        }

        $version_file = $settings->pathToVersionTxt;

        // read file
        if (file_exists($version_file)) {
            $version = file_get_contents($version_file);
            $version = preg_replace('/[^\.0-9]/', '', $version);
            if (!empty($version)) {
                return $version;
            }
        }

        // something went wrong
        return '';
    }
}
