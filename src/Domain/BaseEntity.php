<?php
/**
 * @author 
 *
 * @version 1.0.0
 */

namespace App\Domain\Entity;

use Doctrine\Persistence\ManagerRegistry;


/**
 * Class BaseEntity
 */
abstract class BaseEntity
{
    /**
     * @var ManagerRegistry
     */
    private $doctrine;

    /**
     * @var array
     */
    protected $repository;

    /**
     * constructor.
     *
     * @param ManagerRegistry $doctrine
     */
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->repository = [];
        $this->doctrine = $doctrine;

        ini_set('memory_limit','-1'); // TODO: better memory management

        // not logging sql queries
        $this->doctrine->getConnection()->getConfiguration()->setSQLLogger(null);
    }

    /**
     * flush
     */
    protected function flush()
    {
        $this->doctrine->getManager()->flush();
    }

    /**
     * @param string $status
     * @param string $message
     *
     * @return array
     */
    protected function throws(string $status, string $message = null) : array
    {
        return [$status => [
            "message" => $message
        ]];
    }
}