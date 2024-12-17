<?php

declare(strict_types=1);

namespace TdxLtd\Http;

use Hyperf\HttpServer\Request as HyRequest;
use TdxLtd\Http\Contract\RequestInterface;

/**
 * Class Request
 * @package TdxLtd\Http
 */
class Request extends HyRequest implements RequestInterface
{

}
