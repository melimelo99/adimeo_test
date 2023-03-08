<?php

namespace App\Manager;

use App\Entity\Picture;
use Doctrine\ORM\EntityManagerInterface;

class PictureManager
{
    public function __construct(
        private EntityManagerInterface $em
    )
    {
    }

    public function persistImageDisplayed(array $picture): void
    {
        $pictureToDb = New Picture();
        $pictureToDb->setDate($picture['date'])
            ->setExplanation($picture['explanation'])
            ->setTitle($picture['title'])
            ->setImage($picture['hdurl'])
        ;

        $this->em->persist($pictureToDb);
        $this->em->flush();
    }

}