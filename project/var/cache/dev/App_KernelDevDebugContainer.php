<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4FaQNl9\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4FaQNl9/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4FaQNl9.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4FaQNl9\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4FaQNl9\App_KernelDevDebugContainer([
    'container.build_hash' => '4FaQNl9',
    'container.build_id' => 'fd15016c',
    'container.build_time' => 1646304900,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4FaQNl9');
