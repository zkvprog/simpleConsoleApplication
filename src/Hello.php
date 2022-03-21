<?php

namespace App\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class Hello extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:create-user';

    protected function configure(): void
    {
        $this
            ->setName('say_hello')
            ->setDescription('say hello + your input')
            ->addArgument('text', InputArgument::REQUIRED)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $text = $input->getArgument('text');

        $output->writeln('Hello '. $text);

        return Command::SUCCESS;
    }
}