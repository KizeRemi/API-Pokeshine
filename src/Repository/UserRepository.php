<?php
namespace App\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository
{
    /**
     * @return array
     */
    public function getUsersTop(): array
    {
        return $this->createQueryBuilder('u')
            ->select('COUNT(s) AS HIDDEN nbrShinies', 'u')
            ->join('u.shinies', 's')
            ->orderBy('nbrShinies', 'DESC')
            ->andWhere('s.validation = true')
            ->setMaxResults(10)
            ->groupBy('u')
            ->getQuery()
            ->getResult();
    }
}
