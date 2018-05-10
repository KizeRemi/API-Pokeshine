<?php
namespace App\Repository;

use Doctrine\ORM\EntityRepository;
use App\Entity\User;

/**
 * ShinyRepository
 */
class ShinyRepository extends EntityRepository
{
    /**
     * @param int $offset
     * @param int $limit
     *
     * @return array
     */
    public function getUserShiniesByGeneration(User $user, int $generation, int $offset = 0, int $limit = 50): array
    {
        return $this->createQueryBuilder('s')
            ->join('s.pokemon', 'p')
            ->where('s.user = :user')
            ->setParameter('user', $user)
            ->andWhere('p.generation = :gen')
            ->setParameter('gen', $generation)
            ->andWhere('s.validate = true')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * @param User $user
     *
     * @return string
     */
    public function countShiniesByUser(User $user): int
    {
        return (int) $this->createQueryBuilder('s')
            ->select('COUNT(s)')
            ->where('s.user = :user')
            ->setParameter('user', $user)
            ->andWhere('s.validate = true')
            ->getQuery()
            ->getSingleScalarResult();
    }
}
