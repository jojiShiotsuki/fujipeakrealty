<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Modified by kadencewp on 19-March-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

namespace KadenceWP\KadenceBlocks\Symfony\Component\HttpFoundation\Exception;

/**
 * Raised when a user sends a malformed request.
 */
class BadRequestException extends \UnexpectedValueException implements RequestExceptionInterface
{
}
