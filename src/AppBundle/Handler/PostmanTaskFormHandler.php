<?php
/**
 * Created by PhpStorm.
 * User: Patryk
 * Date: 02.06.2016
 * Time: 08:40
 */

namespace AppBundle\Handler;

use AppBundle\Model\PostmanTaskInterface;

class PostmanTaskFormHandler implements PostmanTaskFormHandlerInterface
{
    private $entityClass;
    private $repository;
    private $formFactory;
    private $formType;

    public function __construct(ObjectManager $om, $entityClass,
                                FormFactoryInterface $formFactory, $formType)
    {
        $this->entityClass = $entityClass;
        $this->repository = $om->getRepository($this->entityClass);
        $this->formFactory = $formFactory;
        $this->formType = $formType;
    }

    public function post(array $parameters)
    {
        $postmanTask = $this->createPostmanTask();
        return $this->processForm($postmanTask, $parameters, 'POST');
    }

    private function createPostmanTask()
    {
        return new $this->entityClass();
    }

    private function processForm(PostmanTaskInterface $postmanTask, array $parameters,
                                 $method = "PUT")
    {
        $form = $this->formFactory->create($this->formType, $postmanTask,
            array('method' => $method));
        $form->submit($parameters, 'PATCH' !== $method);
        if ($form->isValid()) {
            $note = $form->getData();
            $this->repository->save($postmanTask);
            return $postmanTask;
        }
        $errors = $this->getErrorsFromForm($form);
        $data = array(
            'type' => 'validation_error',
            'title' => 'There was a validation error.',
            'errors' => $errors,
        );
        $response = new JsonResponse($data, 400);
        throw new InvalidFormException($response, $form);
    }

    private function getErrorsFromForm(FormInterface $form)
    {
        $errors = array();
        foreach($form->getErrors() as $error)
        {
            $errors[] = $error->getMessage();
        }

        foreach($form->all() as $childForm)
        {
            if($childForm instanceof FormInterface)
            {
                if($childErrors = $this->getErrorsFromForm($childForm))
                {
                    $errors[$childForm->getName()] = $childErrors;
                }
            }
        }

        return $errors;
    }
}