<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAj8C4U7\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAj8C4U7/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAj8C4U7.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAj8C4U7\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerAj8C4U7\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Aj8C4U7',
    'container.build_id' => '041724de',
    'container.build_time' => 1617269548,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAj8C4U7');