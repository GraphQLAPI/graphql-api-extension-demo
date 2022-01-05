<?php

namespace GraphQLAPI\ExtensionDemo;

use PoP\Engine\AbstractTestCase;
use PoP\Root\Managers\ComponentManager;

class ComponentTest extends AbstractTestCase
{
    /**
     * The component must have some dependency (only the root has not)
     */
    public function testHasDependedComponentClasses(): void
    {
        $this->assertNotEmpty(
            \PoP\Engine\App::getComponentManager()->getComponent(Component::class)->getDependedComponentClasses()
        );
    }
}
