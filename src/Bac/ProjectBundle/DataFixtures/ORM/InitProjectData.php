<?php

namespace Bac\ProjectBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Bac\ProjectBundle\Entity\Project;

class InitProjectData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $project = new Project();
        $project->setName('bob');
        $project->setDescription(('hello guyz c\'est la teuf'));

        $manager->persist($project);
        $manager->flush();

        $project = new Project();
        $project->setName('toto');
        $project->setDescription(('hello guyz c\'est la looooose'));

        $manager->persist($project);
        $manager->flush();

        $project = new Project();
        $project->setName('tata');
        $project->setDescription(('hello guyz on est millionnaires'));

        $manager->persist($project);
        $manager->flush();
    }
}
