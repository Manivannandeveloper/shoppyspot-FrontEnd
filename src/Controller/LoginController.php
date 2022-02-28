<?php

namespace App\Controller;

use App\Entity\TbCategory;
use App\Entity\TbUsers;
use App\Entity\TbProducts;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Json;
use Symfony\Component\HttpFoundation\Request;
use App\Application\Output\Output;
use APP\Domain\Entity\UserEntity;

class LoginController extends AbstractController
{
    /**
     * @Route("/user/register", name="userRegister", methods={"POST"})
     * 
     * 
     */
    public function userRegister(Request $request)
    {
        $body = $request->getContent();
        if (empty($body)) {
            return Output::throwErrorBadRequest("Bad request");
        }
        $body = json_decode($body, true);
        if (!$body || empty($body['email']) ||  empty($body['password']) || empty($body['firstname']) || empty($body['lastname'])) {
            return Output::throwErrorBadRequest("Bad request");
        }

        try {
            $insertUser = new TbUsers();
            $password = md5($body['password']);
            $userRole = ['ROLE_USER'];
            $insertUser->setFirst_name($body['firstname']);
            $insertUser->setLast_name($body['lastname']);
            $insertUser->setEmail($body['email']);
            $insertUser->setPassword($password);
            $insertUser->setRoles($userRole);
            $insertUser->setMobileNo($body['mobile']);
            $insertUser->setOvPassword($body['password']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($insertUser);
            $em->flush();
            $insertId = $insertUser->getId();

        } catch (\Exception $exp) {
            return Output::throwError("Internal Error ".$exp->getMessage());
        }
        return $this->json(["status" => "success", "email" => $body['email'], "insertId"=>$insertId]);

    }

    /**
     * @Route("/user/login", name="userLogin", methods={"POST"})
     * 
     * 
     */
    public function userLogin(Request $request)
    {
        $body = $request->getContent();
        if (empty($body)) {
            return Output::throwErrorBadRequest("Bad request");
        }
        $body = json_decode($body, true);
        if (!$body || empty($body['email']) ||  empty($body['password'])) {
            return Output::throwErrorBadRequest("Bad request");
        } 
        $repository = $this->getDoctrine()->getRepository(TbUsers::class);
        $items = $repository->findOneBy([
            'email' => $body['email'],
            'password' => md5($body['password']),
        ]); 

        if(!empty($items)){
            return $this->json(["status" => "success", "email" => $body['email'], "insertId"=>$items]);
        }  else{
            return $this->json(["status" => "error", "message" => 'Email id invalid.']);
        } 

    }

}
