<?php

/*
 * @author    DeveloperOnCall
 * @copyright 2019
 */

namespace DeveloperOnCall\Scavenger\Contracts;

use DeveloperOnCall\Scavenger\DTOs\Result;

/**
 * A service that abstracts seeker related methods.
 */
interface Seeker
{
    /**
     * Search target site(s) for listings and collect relevant data.
     *
     * @param null|string $targetName Target
     *
     * @return Result
     */
    public function seek(?string $targetName = null): Result;
}
