<?php

namespace Imbo\MetadataSearch\EventListener;

use Imbo\EventListener\AccessToken as ImboAccessToken;

/**
 * Access token event listener used for authenticating metadata endpoints
 *
 * @author Kristoffer Brabrand <kristoffer@brabrand.net>
 */
class AccessToken extends ImboAccessToken {
    public static function getSubscribedEvents() {
        return [
            'metadata.search' => ['checkAccessToken' => 100]
        ];
    }
}