<?php

declare(strict_types=1);

namespace app\Presenters;

use Nette;
use Nette\Application\Responses;
use Nette\Http;
use Tracy\ILogger;


/**
 * Handles uncaught exceptions and errors, and logs them.
 */
final class HomepagePresenter extends Nette\Application\UI\Presenter
{
    public function renderDefault(): void
    {
        $this->template->title = 'Homepage';
    }
}
