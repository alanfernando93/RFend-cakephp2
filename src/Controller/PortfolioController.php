<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Portfolio Controller
 *
 *
 * @method \App\Model\Entity\Portfolio[] paginate($object = null, array $settings = [])
 */
class PortfolioController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $portfolio = 'class=active';
        $this->set(compact('portfolio'));
    }
}
