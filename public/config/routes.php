<?php
/**
* Copyright (c) 2017 PhoxPHP
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
* SOFTWARE.
*/

######################################
# Application route configuration file
######################################

$route->get('/', 'DefaultController@index');

// Latest documentation
$route->get('/docs/latest', 'DefaultController@documentation');
$route->get('/docs/latest/requirements', 'DefaultController@requirements');
$route->get('/docs/latest/installation', 'DefaultController@installation');
$route->get('/docs/latest/configuration', 'DefaultController@configuration');
$route->get('/docs/latest/authentication', 'DefaultController@authentication');
$route->get('/docs/latest/authentication/configuration', 'DefaultController@authenticationConfiguration');
$route->get('/docs/latest/authentication/usage', 'DefaultController@authenticationUsage');
$route->get('/docs/latest/controllers', 'DefaultController@controllers');
$route->get('/docs/latest/caching', 'DefaultController@caching');
$route->get('/docs/latest/di', 'DefaultController@dependencyInjection');
$route->get('/docs/latest/filesystem', 'DefaultController@filesystem');
$route->get('/docs/latest/database', 'DefaultController@database');
$route->get('/docs/latest/routing', 'DefaultController@routing');
$route->get('/docs/latest/session', 'DefaultController@session');
$route->get('/docs/latest/view', 'DefaultController@views');
$route->get('/docs/latest/validation', 'DefaultController@validation');
$route->get('/docs/changelog', 'DefaultController@changelog');

// v1.3.0 documentation
$route->get('/docs/v1.3.0', 'v13Controller@documentation');
$route->get('/docs/v1.3.0/requirements', 'v13Controller@requirements');
$route->get('/docs/v1.3.0/installation', 'v13Controller@installation');
$route->get('/docs/v1.3.0/configuration', 'v13Controller@configuration');
$route->get('/docs/v1.3.0/authentication', 'v13Controller@authentication');
$route->get('/docs/v1.3.0/authentication/configuration', 'v13Controller@authenticationConfiguration');
$route->get('/docs/v1.3.0/authentication/usage', 'v13Controller@authenticationUsage');
$route->get('/docs/v1.3.0/controllers', 'v13Controller@controllers');
$route->get('/docs/v1.3.0/caching', 'v13Controller@caching');
$route->get('/docs/v1.3.0/di', 'v13Controller@dependencyInjection');
$route->get('/docs/v1.3.0/filesystem', 'v13Controller@filesystem');
$route->get('/docs/v1.3.0/database', 'v13Controller@database');
$route->get('/docs/v1.3.0/routing', 'v13Controller@routing');
$route->get('/docs/v1.3.0/session', 'v13Controller@session');
$route->get('/docs/v1.3.0/view', 'v13Controller@views');

// v1.4.5 documentation
$route->get('/docs/v1.4.5', 'v145Controller@documentation');
$route->get('/docs/v1.4.5/requirements', 'v145Controller@requirements');
$route->get('/docs/v1.4.5/installation', 'v145Controller@installation');
$route->get('/docs/v1.4.5/configuration', 'v145Controller@configuration');
$route->get('/docs/v1.4.5/authentication', 'v145Controller@authentication');
$route->get('/docs/v1.4.5/authentication/configuration', 'v145Controller@authenticationConfiguration');
$route->get('/docs/v1.4.5/authentication/usage', 'v145Controller@authenticationUsage');
$route->get('/docs/v1.4.5/controllers', 'v145Controller@controllers');
$route->get('/docs/v1.4.5/caching', 'v145Controller@caching');
$route->get('/docs/v1.4.5/di', 'v145Controller@dependencyInjection');
$route->get('/docs/v1.4.5/filesystem', 'v145Controller@filesystem');
$route->get('/docs/v1.4.5/database', 'v145Controller@database');
$route->get('/docs/v1.4.5/routing', 'v145Controller@routing');
$route->get('/docs/v1.4.5/session', 'v145Controller@session');
$route->get('/docs/v1.4.5/view', 'v145Controller@views');

// v1.5.1 documentation
$route->get('/docs/v1.5.1', 'v151Controller@documentation');
$route->get('/docs/v1.5.1/requirements', 'v151Controller@requirements');
$route->get('/docs/v1.5.1/installation', 'v151Controller@installation');
$route->get('/docs/v1.5.1/configuration', 'v151Controller@configuration');
$route->get('/docs/v1.5.1/authentication', 'v151Controller@authentication');
$route->get('/docs/v1.5.1/authentication/configuration', 'v151Controller@authenticationConfiguration');
$route->get('/docs/v1.5.1/authentication/usage', 'v151Controller@authenticationUsage');
$route->get('/docs/v1.5.1/controllers', 'v151Controller@controllers');
$route->get('/docs/v1.5.1/caching', 'v151Controller@caching');
$route->get('/docs/v1.5.1/di', 'v151Controller@dependencyInjection');
$route->get('/docs/v1.5.1/filesystem', 'v151Controller@filesystem');
$route->get('/docs/v1.5.1/database', 'v151Controller@database');
$route->get('/docs/v1.5.1/routing', 'v151Controller@routing');
$route->get('/docs/v1.5.1/session', 'v151Controller@session');
$route->get('/docs/v1.5.1/view', 'v151Controller@views');

// v1.6.1 documentation
$route->get('/docs/v1.6.1', 'v161Controller@documentation');
$route->get('/docs/v1.6.1/requirements', 'v161Controller@requirements');
$route->get('/docs/v1.6.1/installation', 'v161Controller@installation');
$route->get('/docs/v1.6.1/configuration', 'v161Controller@configuration');
$route->get('/docs/v1.6.1/authentication', 'v161Controller@authentication');
$route->get('/docs/v1.6.1/authentication/configuration', 'v161Controller@authenticationConfiguration');
$route->get('/docs/v1.6.1/authentication/usage', 'v161Controller@authenticationUsage');
$route->get('/docs/v1.6.1/controllers', 'v161Controller@controllers');
$route->get('/docs/v1.6.1/caching', 'v161Controller@caching');
$route->get('/docs/v1.6.1/di', 'v161Controller@dependencyInjection');
$route->get('/docs/v1.6.1/filesystem', 'v161Controller@filesystem');
$route->get('/docs/v1.6.1/database', 'v161Controller@database');
$route->get('/docs/v1.6.1/routing', 'v161Controller@routing');
$route->get('/docs/v1.6.1/session', 'v161Controller@session');
$route->get('/docs/v1.6.1/view', 'v161Controller@views');

// global routes
$route->get('/docs/contributing', 'DefaultController@contributing');

// Newsletter subscription
$route->post('/', 'SubscriptionController@subscribe');