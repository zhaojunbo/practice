<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Zhaojunbo\ComposerSet\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetTimeCommand extends Command
{
    protected static $defaultName = 'getTime';

    protected function configure()
    {
        $this->setDescription('get now time');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('now time: '.date('Y-m-d H:i:s'));
        return Command::SUCCESS;
    }
}
