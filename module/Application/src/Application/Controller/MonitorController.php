<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class MonitorController extends AbstractActionController
{
    /**
     * This action generate a slow request
     */
    public function slowrequestAction()
    {
    	$delay = $this->params()->fromQuery('delay',1);
    	sleep($delay);
    	return array(
    		'delay' => $delay,
    	);
    }
    
    public function slowfunctionAction()
    {
        $delay = $this->params()->fromQuery('delay',1);
    }
}