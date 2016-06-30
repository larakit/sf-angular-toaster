<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-toaster')
    ->usePackage('larakit/sf-angular')
    ->ngModule('toaster')
    ->js('//cdnjs.cloudflare.com/ajax/libs/angularjs-toaster/2.0.0/toaster.min.js')
    ->css('//cdnjs.cloudflare.com/ajax/libs/angularjs-toaster/2.0.0/toaster.min.css');

\Larakit\Page\Page::bodyAppend('<toaster-container></toaster-container>');
