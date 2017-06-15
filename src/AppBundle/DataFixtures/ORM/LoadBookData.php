<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Book;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadBookData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $book = new Book();
        $book->setName('Doctor With Big Eyes');
        $book->setReleaseDate('01.02.2016');
        $book->setLength('200');
        $book->setGenres('Police');
        $book->setUserReadable('Yes');
        $book->setAdminReadable('Yes');
        $manager->persist($book);

        $book = new Book();
        $book->setName('Hunger Of My Town');
        $book->setReleaseDate('02.05.2016');
        $book->setLength('10');
        $book->setGenres('Comedy');
        $book->setUserReadable('Yes');
        $book->setAdminReadable('Yes');
        $manager->persist($book);

        $book = new Book();
        $book->setName('Colleagues And Demons');
        $book->setReleaseDate('06.04.2015');
        $book->setLength('30');
        $book->setGenres('Drama');
        $book->setUserReadable('Yes');
        $book->setAdminReadable('Yes');
        $manager->persist($book);

        $book = new Book();
        $book->setName('Humans In The Library');
        $book->setReleaseDate('15.06.1982');
        $book->setLength('600');
        $book->setGenres(array('Non-fiction','Horror'));
        $book->setUserReadable('No');
        $book->setAdminReadable('Yes');
        $manager->persist($book);

        $book = new Book();
        $book->setName('Founders Of Evil');
        $book->setReleaseDate('30.08.1530');
        $book->setLength('900');
        $book->setGenres('Drama');
        $book->setUserReadable('Yes');
        $book->setAdminReadable('Yes');
        $manager->persist($book);

        $book = new Book();
        $book->setName('Ancestor With Horns');
        $book->setReleaseDate('10.10.2019');
        $book->setLength('1000');
        $book->setGenres('Drama');
        $book->setUserReadable('Yes');
        $book->setAdminReadable('Yes');
        $manager->persist($book);

        $book = new Book();
        $book->setName('Age Of The Light');
        $book->setReleaseDate('06.12.1923');
        $book->setLength('234');
        $book->setGenres('Tragedy');
        $book->setUserReadable('Yes');
        $book->setAdminReadable('Yes');
        $manager->persist($book);

        $book = new Book();
        $book->setName('Learning With The River');
        $book->setReleaseDate('02.02.1965');
        $book->setLength('200');
        $book->setGenres(array('Children','Fiction'));
        $book->setUserReadable('Yes');
        $book->setAdminReadable('Yes');
        $manager->persist($book);

        $book = new Book();
        $book->setName('Lord And Buffoon');
        $book->setReleaseDate('09.07.2001');
        $book->setLength('240');
        $book->setGenres(array('Horror','Satire'));
        $book->setUserReadable('Yes');
        $book->setAdminReadable('Yes');
        $manager->persist($book);

        $book = new Book();
        $book->setName('Back To The Future');
        $book->setReleaseDate('09.07.1999');
        $book->setLength('220');
        $book->setGenres(array('Fiction','Drama'));
        $book->setUserReadable('Yes');
        $book->setAdminReadable('Yes');
        $manager->persist($book);


        $manager->flush();
    }
}