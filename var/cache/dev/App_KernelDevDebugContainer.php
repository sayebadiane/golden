<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW2qx1V8\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW2qx1V8/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerW2qx1V8.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerW2qx1V8\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerW2qx1V8\App_KernelDevDebugContainer([
    'container.build_hash' => 'W2qx1V8',
    'container.build_id' => 'b08c1d4a',
    'container.build_time' => 1658859060,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerW2qx1V8');
