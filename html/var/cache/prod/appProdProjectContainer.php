<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCpgrrlt\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCpgrrlt/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerCpgrrlt.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerCpgrrlt\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerCpgrrlt\appProdProjectContainer([
    'container.build_hash' => 'Cpgrrlt',
    'container.build_id' => '3a25aa0d',
    'container.build_time' => 1637969061,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCpgrrlt');
