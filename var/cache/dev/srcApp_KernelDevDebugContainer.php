<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNd2iyeY\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNd2iyeY/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNd2iyeY.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNd2iyeY\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerNd2iyeY\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => 'Nd2iyeY',
    'container.build_id' => '4e693a9c',
    'container.build_time' => 1546080980,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerNd2iyeY');
