<?php
namespace saibotd\acTrack;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use saibotd\acTrack\ACTimeTrackCommand;

class AcTrackApplication extends Application{
    protected function getCommandName(InputInterface $input){
        return 'actrack';
    }

    protected function getDefaultCommands(){
        $defaultCommands = parent::getDefaultCommands();
        $defaultCommands[] = new ACTimeTrackCommand();
        return $defaultCommands;
    }

    public function getDefinition(){
        $inputDefinition = parent::getDefinition();
        $inputDefinition->setArguments();
        return $inputDefinition;
    }
}