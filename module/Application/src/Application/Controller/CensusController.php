<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CensusController extends AbstractActionController
{
    public function indexAction()
    {
        $om = $this->serviceLocator->get('Doctrine\ORM\EntityManager');
        $alien = $om->find('Application\Entity\Alien',5);
        var_dump($alien);
    }
}