<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

       

        // $this->loadComponent('Auth' , [
        //     'authorize' => ['Controller'],
        //     'authenticate' => [
        //         'Form' => [
        //             'fields' => [
        //                 'username' => 'email',
        //             ],
        //             'finder' => 'auth'
        //         ]
        //     ],
            // 'loginAction' => [
            //     'controller' => 'Users',
            //     'action' => 'login'
            // ],
            // 'authError' => 'Ingrese sus datos',
            // 'loginRedirect' => [
            //     'controller' => 'Users',
            //     'action' => 'home'
            // ],
            // // 'logoutRedirect' => [
            // //     'controller' => 'Users',
            // //     'action' => 'login'
            // // ],
            // // 'unauthorizedRedirect' => $this->referer()
        // ]);
    }



    // public function beforeRender(Event $event)
    // {
    //     if (!array_key_exists('_serialize', $this->viewVars) &&
    //         in_array($this->response->type(), ['application/json', 'application/xml'])
    //     ) {
    //         $this->set('_serialize', true);
    //     }
    // }

    // public function beforeFilter(Event $event)
    // {
    //     $this->set('current_user', $this->Auth->user());
    // }

    // public function isAuthorized($user)
    // {
    //     if(isset($user['role']) and $user['role'] === 'admin')
    //     {
    //         return true;
    //     }

    //     return false;
    // }



}
