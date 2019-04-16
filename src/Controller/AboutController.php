<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * About Controller
 *
 *
 * @method \App\Model\Entity\About[] paginate($object = null, array $settings = [])
 */
class AboutController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $about = 'class=active';
        $this->set(compact('about'));
    }
}
