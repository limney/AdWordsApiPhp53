<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class BudgetError extends ApiError
{
    /**
     * The error reason represented by an enum.
     * @var \AdWords\cm\v201109\BudgetErrorReason
     */
    public $reason;
}