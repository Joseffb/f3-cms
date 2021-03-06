<?php

namespace FFCMS\Traits;

/**
 * The constructor should initialise a member $oUrlHelper which has two methods:
 *     - internal to generate an internal link (optionally with @value to reference a URL alias)
 *     - external to generate an external link (default to https)
 */
trait UrlHelper
{
    /**
     * Create an internal URL
     *
     * @param string $url
     * @param array $params
     */
    public function url(string $url, array $params = []): string
    {
        return \FFMVC\Helpers\Url::instance()->internal($url, $params);
    }


    /**
     * Create an external URL
     *
     * @param string $url
     * @param array $params
     */
    public function xurl(string $url, array $params = [], bool $https = true): string
    {
        return \FFMVC\Helpers\Url::instance()->external($url, $params, $https);
    }
}
