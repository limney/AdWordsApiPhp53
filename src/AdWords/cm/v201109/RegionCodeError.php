<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class RegionCodeError extends ApiError
{
    /**
     * The error reason represented by an enum.
     * @var \AdWords\cm\v201109\RegionCodeErrorReason
     */
    public $reason;
}