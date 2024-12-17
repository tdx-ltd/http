<?php

declare(strict_types=1);

namespace TdxLtd\Http;

use TdxLtd\Http\Contract\ResponseInterface;
use Hyperf\HttpServer\Response as HyResponse;

/**
 * Class Response
 * @package TdxLtd\Http
 */
class Response extends HyResponse implements ResponseInterface
{
    public function success(): void
    {
    }

}
