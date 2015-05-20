<?php

namespace PSaunders88\MathCommand\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use PSaunders88\MathCommand\Manager\MathManager;
use PSaunders88\MathCommand\Math\MathFactory;

class MathCommand extends Command
{
    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        $this->setName('math:compute')
            ->setDescription('Perform the same basic math operation on all of the proivded values')
            ->addArgument(
                'initialValue',
                InputArgument::REQUIRED,
                'What value do want the operation to start from?'
            )
            ->addArgument(
                'operator',
                InputArgument::REQUIRED,
                "What operation to do you want to perform? (+,-,x,/)"
            )
            ->addArgument(
                'values',
                InputArgument::IS_ARRAY | InputArgument::REQUIRED,
                'Which values do you want to use with operation? (separate multiple valueswith a space)'
            );
    }
    
    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $mathManager = new MathManager(MathFactory::build(
            $input->getArgument('operator'))
        );
        
        $result = $mathManager->compute(
            $input->getArgument('initialValue'),
            $input->getArgument('values')
        );
        
        $output->write("<info>Output: $result</info>", true);
    }
}
