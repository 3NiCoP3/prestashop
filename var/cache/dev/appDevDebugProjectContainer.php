<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFf07le5\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFf07le5/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerFf07le5.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerFf07le5\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerFf07le5\appDevDebugProjectContainer([
    'container.build_hash' => 'Ff07le5',
    'container.build_id' => '0c857dcb',
    'container.build_time' => 1608580977,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFf07le5');
