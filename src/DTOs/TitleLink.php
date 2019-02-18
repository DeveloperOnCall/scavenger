<?php

/*
 * @author    DeveloperOnCall
 * @copyright 2019
 */

namespace DeveloperOnCall\Scavenger\DTOs;

/**
 * A simple combination of **title** and **link**.
 */
class TitleLink
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $link;

    /**
     * TitleLink constructor.
     *
     * @param string $title
     * @param string $link
     */
    public function __construct(string $title, string $link)
    {
        $this->title = $title;
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }
}
