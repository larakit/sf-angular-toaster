<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angularjs-toaster')
    ->usePackage('larakit/sf-angular')
    ->js('//cdnjs.cloudflare.com/ajax/libs/angularjs-toaster/2.0.0/toaster.min.js')
    ->css('//cdnjs.cloudflare.com/ajax/libs/angularjs-toaster/2.0.0/toaster.min.css');

\Larakit\Page\Page::bodyAppend('<toaster-container></toaster-container>');