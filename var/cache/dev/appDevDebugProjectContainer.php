<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3p5awyf\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3p5awyf/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container3p5awyf.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container3p5awyf\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container3p5awyf\appDevDebugProjectContainer([
    'container.build_hash' => '3p5awyf',
    'container.build_id' => '8929a6fa',
    'container.build_time' => 1608411421,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3p5awyf');
