<?php
declare(strict_types=1);
namespace Lazar\Wallet\Infrastructure\DataAccess\Repositories;

use Doctrine\ORM\EntityManagerInterface;
use Lazar\Wallet\Infrastructure\DataAccess\Exceptions\EntityNotFoundException;

abstract class BaseRepository
{
    protected string $entity;

    public function __construct(
        protected EntityManagerInterface $em
    )
    {}

    /**
     * @throws EntityNotFoundException
     */
    protected function findById(string $id): object
    {
        $entity = $this->em->find($this->entity, $id);
        if (!$entity) {
            throw new EntityNotFoundException("$this->entity not found!");
        }

        return $entity;
    }


    protected function createOrUpdate(object $entity) : void
    {
        $this->em->persist($entity);
        $this->em->flush();
    }
    protected function delete(object $entity) : void
    {
        $this->em->remove($entity);
        $this->em->flush();
    }
    protected function findAll() : array
    {
        return $this->em->getRepository($this->entity)->findAll();
    }
}