<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBwogvwN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBwogvwN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBwogvwN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBwogvwN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBwogvwN\App_KernelDevDebugContainer([
    'container.build_hash' => 'BwogvwN',
    'container.build_id' => '28efe55e',
    'container.build_time' => 1740964643,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBwogvwN');
