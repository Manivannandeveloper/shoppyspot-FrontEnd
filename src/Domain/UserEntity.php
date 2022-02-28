<?php
/**
 *
 */

namespace App\Domain\Entity;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\DBAL\DBALException;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use App\Entity\TbUsers;

/**
 * Class UserEntity
 *
 * @package App\Domain
 */
final class UserEntity extends BaseEntity
{
    /**
     * Constructor.
     *
     * @param ManagerRegistry $doctrine
     */
    public function __construct(ManagerRegistry $doctrine)
    {
        parent::__construct($doctrine);

        $this->repository["users"] = $doctrine->getRepository(TbUsers::class);
    }

    public function insertUserRecord($body) : array
    {
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


            // $insertUser->persist($insertUser);
            // $insertUser->flush();

            $lastInsertId['id'] = $insertUser->getId();
            return $lastInsertId;


        } catch(\Exception $exp) {
            throw $exp;
        }
    }
}