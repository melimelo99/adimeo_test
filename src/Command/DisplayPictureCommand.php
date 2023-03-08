<?php
namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'display-picture',
    description: 'picture of the day from NASA'
)]
class DisplayPictureCommand extends Command
{
    protected function configure(): void
    {
        $this->setName('display-picture')
            ->setDescription('picture of the day from NASA');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //$this->run('symfony server:start');
        return Command::SUCCESS;
    }

}