<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Book
 *
 * @ORM\Table(name="book")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BookRepository")
 */
class Book
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="ReleaseDate", type="string", length=255)
     */
    private $releaseDate;

    /**
     * @var string
     *
     * @ORM\Column(name="Length", type="string", length=255)
     */
    private $length;

    /**
     * @var array
     *
     * @ORM\Column(name="Genres", type="array")
     */
    private $genres;

    /**
     * @var string
     *
     * @ORM\Column(name="UserReadable", type="string", length=255)
     */
    private $userReadable;

    /**
     * @var string
     *
     * @ORM\Column(name="AdminReadable", type="string", length=255)
     */
    private $adminReadable;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Book
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set releaseDate
     *
     * @param string $releaseDate
     *
     * @return Book
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return string
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Set length
     *
     * @param string $length
     *
     * @return Book
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set genres
     *
     * @param array $genres
     *
     * @return Book
     */
    public function setGenres($genres)
    {
        $this->genres = $genres;

        return $this;
    }

    /**
     * Get genres
     *
     * @return array
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * Set userReadable
     *
     * @param string $userReadable
     *
     * @return Book
     */
    public function setUserReadable($userReadable)
    {
        $this->userReadable = $userReadable;

        return $this;
    }

    /**
     * Get userReadable
     *
     * @return string
     */
    public function getUserReadable()
    {
        return $this->userReadable;
    }

    /**
     * Set adminReadable
     *
     * @param string $adminReadable
     *
     * @return Book
     */
    public function setAdminReadable($adminReadable)
    {
        $this->adminReadable = $adminReadable;

        return $this;
    }

    /**
     * Get adminReadable
     *
     * @return string
     */
    public function getAdminReadable()
    {
        return $this->adminReadable;
    }
}

