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
final class HomepagePresenter implements Nette\Application\IPresenter
{
    public function run(Nette\Application\Request $request): Nette\Application\Response
    {

    }
}
