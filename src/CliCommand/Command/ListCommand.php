<?php

namespace Startwind\Forrest\CliCommand\Command;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ListCommand extends CommandCommand
{
    protected static $defaultName = 'commands:list';
    protected static $defaultDescription = 'List all command that are registered in the repositories.';

    protected function configure()
    {
        $this->setAliases(['commands']);
    }


    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->renderListCommand($input, $output);
        return SymfonyCommand::SUCCESS;
    }
}
