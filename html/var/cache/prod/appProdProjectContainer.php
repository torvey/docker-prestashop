<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXhvpsjd\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXhvpsjd/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerXhvpsjd.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerXhvpsjd\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerXhvpsjd\appProdProjectContainer([
    'container.build_hash' => 'Xhvpsjd',
    'container.build_id' => '4af61815',
    'container.build_time' => 1637864374,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXhvpsjd');
