<?php

namespace Workup\Nova\CommandRunner\Console;

trait HasNovaProgressBar
{
    protected function createProgressBar(int $max)
    {
        return new ProgressBar($this->output, $this->signature, $max);
    }
}
