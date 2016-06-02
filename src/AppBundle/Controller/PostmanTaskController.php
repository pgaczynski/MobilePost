<?php
/**
 * Created by PhpStorm.
 * User: Patryk
 * Date: 02.06.2016
 * Time: 08:29
 */

namespace AppBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;

class PostmanTaskController extends FOSRestController
{
    public function postPostmanTaskAction(Request $request)
    {
        try {
            $newPostmanTask = $this->container->get('app.postmanTask_form.handler')
                ->post(
                    $request->request->all()
                );
            $routeOptions = array(
                'id' => $newPostmanTask->getId(),
                '_format' => $request->get('_format')
            );
            return $routeOptions;
            /*return $this->routeRedirectView('api_1_get_postmen', $routeOptions,
                Response::HTTP_CREATED);*/
        } catch (InvalidFormException $exception) {
            return array('form' => $exception->getForm());
        }
    }
}