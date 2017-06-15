<?php
// src/AppBundle/DataFixtures/ORM/LoadUserData.php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\User;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {

        $user = new User();
        $user->setUsername('admin');
        $user->setEmail('admin@contentfleet.com');
        $user->setPlainPassword('admin');
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_ADMIN'));
        $manager->persist($user);

        $user = new User();
        $user->setUsername('user');
        $user->setEmail('user@contentfleet.com');
        $user->setPlainPassword('user');
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_USER'));
        $manager->persist($user);

        $manager->flush();
    }
}