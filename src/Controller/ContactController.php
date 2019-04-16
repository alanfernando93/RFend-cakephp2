<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contact Controller
 *
 *
 * @method \App\Model\Entity\Contact[] paginate($object = null, array $settings = [])
 */
class ContactController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $contact = 'class=active';
        $this->set(compact('contact'));
    }
}
