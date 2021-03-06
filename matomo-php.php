<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class IPLocatePlugin
 * @package Grav\Plugin
 */
class MatomoPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }

        //Load the custom PHP for generating the lists
        require_once __DIR__ . '/classes/PiwikTracker.php';
        $tracker_url =
            $config->get('matomo_common_settings.url');
        $pageid =
            $config->get('matomo_common_settings.page_id');
        $auth_token =
            $config->get('matomo_common_settings.token_auth');
        $page_title =
            $config->get('matomo_common_settings.page_view');
        PiwikTracker::$URL = $tracker_url;
          $tracker = new PiwikTracker($pageid);
          $tracker->setTokenAuth($auth_token);
          $tracker->doTrackPageView($page_title);

        }
}
