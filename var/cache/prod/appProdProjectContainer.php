<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerB9klqga\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerB9klqga/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerB9klqga.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerB9klqga\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerB9klqga\appProdProjectContainer([
    'container.build_hash' => 'B9klqga',
    'container.build_id' => 'ff027354',
    'container.build_time' => 1608044626,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerB9klqga');
