<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXIiWqgm\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXIiWqgm/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerXIiWqgm.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerXIiWqgm\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerXIiWqgm\appAppKernelProdContainer([
    'container.build_hash' => 'XIiWqgm',
    'container.build_id' => 'c0fc199a',
    'container.build_time' => 1698337527,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXIiWqgm');
