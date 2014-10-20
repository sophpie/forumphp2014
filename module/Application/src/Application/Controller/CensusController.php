<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Db\Adapter\Adapter;
use Zend\View\Model\ViewModel;

class CensusController extends AbstractActionController
{
    public function indexAction()
    {
        $om = $this->serviceLocator->get('Doctrine\ORM\EntityManager');
        die();
        
        
    	$dbAdapter = $this->serviceLocator->get('dbAdapter');
    	$result = $dbAdapter->query('SELECT * FROM alien', Adapter::QUERY_MODE_EXECUTE);
    	$viewModel = new ViewModel();
    	$viewModel->setVariable('inhabitants', $result);
    	return $viewModel;
    }
}