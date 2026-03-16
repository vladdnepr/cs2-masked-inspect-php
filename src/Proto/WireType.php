<?php

declare(strict_types=1);

namespace VlyDev\Steam\Proto;

/**
 * Protobuf wire type constants.
 */
final class WireType
{
    public const VARINT = 0;
    public const FIXED64 = 1;
    public const LEN = 2;
    public const FIXED32 = 5;

    private function __construct() {}
}
