<?php

namespace Record\Stuberator\Contracts;

interface ActionInterface
{
    /**
     * Execute the action with the given parameters.
     *
     * @param mixed ...$params
     * @return mixed
     */
    public function execute(...$params);
}
