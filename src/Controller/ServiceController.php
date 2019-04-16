<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Service Controller
 *
 *
 * @method \App\Model\Entity\Service[] paginate($object = null, array $settings = [])
 */
class ServiceController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $service = 'class=active';
        $this->set(compact('service'));
    }
}
