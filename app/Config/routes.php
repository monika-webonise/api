<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
 
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

 /**
 * Rest API Routes for category
 */
	Router::connect('/Category/CreateCategory', array('controller' => 'Category', 'action' => 'addcategory'));

	Router::connect('/Category/updatecategory/:id', array('controller' => 'Category', 'action' => 'updatecategory' , 'id' => '[0-9]+'));

	Router::connect('/Category/removecategory', array('controller' => 'Category', 'action' => 'deletecategory'));

	Router::connect('/Category/ViewCategory/:id', array('controller' => 'Category', 'action' => 'getcategory', 'id' => '[0-9]+'));

/**
 * Rest API Routes for product
*/

	Router::connect('/Category/CreateProduct', array('controller' => 'Product', 'action' => 'addproduct'));

	Router::connect('/Category/editProduct', array('controller' => 'Product', 'action' => 'updateproduct'));

	Router::connect('/Category/removeProduct', array('controller' => 'Product', 'action' => 'deleteproduct'));

	Router::connect('/Category/viewProduct/:id', array('controller' => 'Product', 'action' => 'getproduct', 'id' => '[0-9]+'));

/**
 * Rest API Routes for cart
*/

	Router::connect('/Category/CreateCart', array('controller' => 'Cart', 'action' => 'addCart'));

	Router::connect('/Category/editCart', array('controller' => 'Cart', 'action' => 'updatecart'));

	Router::connect('/Category/removeCart', array('controller' => 'Cart', 'action' => 'deletecart'));

	Router::connect('/Category/CartList', array('controller' => 'Cart', 'action' => 'getCart'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

	Router::mapResources('recipes');
	Router::parseExtensions();	
/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
