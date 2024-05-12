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
        $this->template->users_data = $this->database
            ->table('users')
            ->limit(5)
            ->fetchAll(); // Fetch all rows from the users table

        // Render the template
        $this->template->render(__DIR__ . '/default.latte');
    }
}
