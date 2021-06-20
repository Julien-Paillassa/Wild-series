<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use phpDocumentor\Reflection\Types\Self_;

class ActorFixtures extends Fixture
{
    const ACTORS = [
        'Michael C. Hall', // actor_0
        'Jennifer Carpenter', // actor_1
        'David Zayas', // actor_2
        'Karl Urban', // actor_3
        'Antony Starr', // actor_4
        'Jack Quaid', // actor_5
        'Bryan Cranston', // actor_6
        'Aaron Paul', // actor_7
        'Ivana Miličević', // actor_8
        'Hoon Lee', // actor_9
        'Ulrich Thomsen', // actor_10
        'Frankie Muniz', // actor_11
        'Erik Per Sullivan', // actor_12
        'Justin Berfield', // actor_13
        'Jane Kaczmarek', // actor_14
        'Stan Marsh', // actor_15
        'Kyle Broflovski', // actor_16
        'Eric Cartman', // actor_17
        'Norman Reedus', // actor_18
        'Andrew Lincoln', // actor_19
        'Jeffrey Dean Morgan', // actor_20
        'Danai Gurira', // actor_21
        'Kenny McCormick', // actor_22
        'Kit Harington', // actor_23
        'Emilia Clarke', // actor_24
        'Peter Dinklage', // actor_25
        'Rick', // actor_26
        'Morty', // actor_27
        'Luffy', // actor_28
        'Zoro', // actor_29
        'Nami', // actor_30
    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::ACTORS as $key => $actorName) {
            $actor = new Actor();
            $actor->setName($actorName);
            $manager->persist($actor);
            $this->addReference('actor_' . $key, $actor);
        }
        $manager->flush();
    }
}
