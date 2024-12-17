<?php

declare(strict_types=1);

namespace TdxLtd\Http\Contract;

use Hyperf\HttpServer\Contract\ResponseInterface as HyResponseInterface;

/**
 * Interface ResponseInterface
 * @package TdxLtd\Http\Contract
 */
interface ResponseInterface extends HyResponseInterface
{
    public function success(): void;
}
