<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-toaster')
    ->usePackage('larakit/sf-angular')
    ->setSourceDir('public')
    ->ngModule('toaster')
    ->jsPackage('toaster.min.js')
    ->cssPackage('toaster.min.css');

\Larakit\Page\Page::bodyAppend('<toaster-container></toaster-container>');
