<?php

/**
 * AcMailer Controller 
 * (https://github.com/acelaya/ZF2-AcMailer)
 *
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AcMailerController extends AbstractActionController
{

    private $mailService;

    /**
     * Test with html body
     */
    public function example1Action()
    {
        $this->mailService = $this->getServiceLocator()->get('AcMailer\Service\MailService');
        $this->mailService->setSubject('This is the subject')
                ->setBody('This is the body <a href="http://www.ariete.net"><strong>Ariete</strong></a>'); // This can be a string, HTML or even a zend\Mime\Message or a Zend\Mime\Part
        
        //Rimuovo tuttio gli allegati
        $this->mailService->setAttachments(array());
        
        $this->send();
        return FALSE;
    }

    /**
     * Test with template
     */
    public function example2Action()
    {
        $this->mailService = $this->getServiceLocator()->get('AcMailer\Service\MailService');
        $this->mailService->setSubject('This is the subject');
        
        //Rimuovo tuttio gli allegati
        $this->mailService->setAttachments(array());        

        //Template
        $this->mailService->setTemplate(
            'ac-mailer/mail-templates/mail', array(
            'label' => 'Campionature',
            'name' => 'John Doe',
            )
        );

        $this->send();
        return FALSE;
    }
    
    /**
     * Test with Attachment
     */
    public function example3Action()
    {
        $this->mailService = $this->getServiceLocator()->get('AcMailer\Service\MailService');
        $this->mailService->setSubject('This is the subject')->setBody('Test with set attachment');

        //Add attachment
        $this->mailService->setAttachments(array(
            'data/mail/attachments/phptherightway.pdf',
            )
        );

        $this->send();
        return FALSE;
    }    

    private function send()
    {
        //Add recipient
        $message = $this->mailService->getMessage();
        $message->addTo("simogrima@gmail.com");
        
        $result = $this->mailService->send();
        if ($result->isValid())
            echo 'Message sent. Congratulations!';
        else
            echo 'An error occured. Exception message: ' . $result->getMessage();
        return FALSE;
    }

}
