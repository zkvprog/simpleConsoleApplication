<?php

namespace App\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;

class Quest extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:quest';

    protected function configure(): void
    {
        $this
            ->setName('quest')
            ->setDescription('repeat string certain times')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $helper = $this->getHelper('question');
        $question = new Question('Введите ваше имя?', '');
        $name = $helper->ask($input, $output, $question);

        $question = new Question('Введите ваш возраст?', '');
        $age = $helper->ask($input, $output, $question);

        $question = new ChoiceQuestion(
            'Ваш пол (м)?',
            ['м', 'ж'],
            0
        );
        $sex = $helper->ask($input, $output, $question);

        $output->writeln($name . ', ваш возраст: ' . $age . ' ваш пол: ' . $sex);

        return Command::SUCCESS;
    }
}