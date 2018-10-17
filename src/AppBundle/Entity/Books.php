<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Books
 *
 * @ORM\Table(name="books")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BooksRepository")
 */
class Books
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="autor_name", type="string", length=255)
     */
    private $autorName;

    /**
     * @var string
     *
     * @ORM\Column(name="autor_surname", type="string", length=255)
     */
    private $autorSurname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="year", type="datetime",  nullable=true)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255,  nullable=true )
     */
    private $type;


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
     * Set title
     *
     * @param string $title
     *
     * @return Books
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set autorName
     *
     * @param string $autorName
     *
     * @return Books
     */
    public function setAutorName($autorName)
    {
        $this->autorName = $autorName;

        return $this;
    }

    /**
     * Get autorName
     *
     * @return string
     */
    public function getAutorName()
    {
        return $this->autorName;
    }

    /**
     * Set autorSurname
     *
     * @param string $autorSurname
     *
     * @return Books
     */
    public function setAutorSurname($autorSurname)
    {
        $this->autorSurname = $autorSurname;

        return $this;
    }

    /**
     * Get autorSurname
     *
     * @return string
     */
    public function getAutorSurname()
    {
        return $this->autorSurname;
    }

    /**
     * Set year
     *
     * @param \DateTime $year
     *
     * @return Books
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return \DateTime
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Books
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}

