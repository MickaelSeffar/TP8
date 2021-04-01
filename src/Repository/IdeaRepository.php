<?php


namespace App\Repository;


use Doctrine\ORM\EntityRepository;

class IdeaRepository extends EntityRepository
{
    public function getAll($page = 1) {

        $req = $this->createQueryBuilder('idea')
            ->where('idea.isPublished = :published')->setParameter(':published', true)
            ->orderBy('idea.dateCreated', 'DESC')
            ->setFirstResult(($page - 1) * 100)
            ->setMaxResults(100);

        return $req->getQuery()->getResult();

    }


}