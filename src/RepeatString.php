<?php

namespace App\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class RepeatString extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:create-user';

    protected function configure(): void
    {
        $this
            ->setName('repeat_string')
            ->setDescription('repeat string certain times')
            ->addArgument('string', InputArgument::REQUIRED)
            ->addArgument('repeat', InputArgument::OPTIONAL)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $string = $input->getArgument('string');
        $repeat = $input->getArgument('repeat') ?: 1;

        $output->writeln(str_repeat($string, $repeat));

        return Command::SUCCESS;
    }
}