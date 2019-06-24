<?php

namespace Job\Space;

class Drop extends Job
{
    public function run()
    {
        $space = $this->getSpace();
        if ($space->getId() < 512) {
            throw new Exception('Disabled for system spaces');
        }

        $this->getClient()->call('box.space.'.$space->getName().':drop');
    }
}
