<?php

/**
 * @category : Clients
 * @package : IHttpClientInterface
 * @author : Falcon  Team
 * @version : 1.0.0
 * @license : https://opensource.org/licenses/MIT
 */

namespace FalconException\Clients;

/**
 * Interface IHttpClientInterface
 *
 * Used for Custom Client Library.
 *
 * @package FalconSDK\Clients
 */
interface IHttpClientInterface
{
    public function request($path, $queryArray = array(), $options = array());
}