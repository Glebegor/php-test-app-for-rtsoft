<?php

declare(strict_types=1);

namespace App\UI\Home;

use Nette;


final class HomePresenter extends Nette\Application\UI\Presenter
{
    public function __construct(
        private Nette\Database\Explorer $database,
    ) {
    }

    public function renderDefault(): void
    {
        $this->template->users = $this->database
            ->table('users')
            ->limit(5);
    }
}
