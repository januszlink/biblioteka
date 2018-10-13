<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Loaned
 *
 * @ORM\Table(name="loaned")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LoanedRepository")
 */
class Loaned
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
     * @var int
     *
     * @ORM\Column(name="id_book", type="integer")
     */

    private $idBook;

    /**
     * @var int
     *
     * @ORM\Column(name="id_borrower", type="integer")
     */
    private $idBorrower;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_1", type="datetime", )
     */
    private $date1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_2", type="datetime", nullable=true)
     */
    private $date2;


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
     * Set idBook
     *
     * @param integer $idBook
     *
     * @return Loaned
     */
    public function setIdBook($idBook)
    {
        $this->idBook = $idBook;

        return $this;
    }

    /**
     * Get idBook
     *
     * @return int
     */
    public function getIdBook()
    {
        return $this->idBook;
    }

    /**
     * Set idBorrower
     *
     * @param integer $idBorrower
     *
     * @return Loaned
     */
    public function setIdBorrower($idBorrower)
    {
        $this->idBorrower = $idBorrower;

        return $this;
    }

    /**
     * Get idBorrower
     *
     * @return int
     */
    public function getIdBorrower()
    {
        return $this->idBorrower;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Loaned
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set date1
     *
     * @param \DateTime $date1
     *
     * @return Loaned
     */
    public function setDate1($date1)
    {
        $this->date1 = $date1;

        return $this;
    }

    /**
     * Get date1
     *
     * @return \DateTime
     */
    public function getDate1()
    {
        return $this->date1;
    }

    /**
     * Set date2
     *
     * @param \DateTime $date2
     *
     * @return Loaned
     */
    public function setDate2($date2)
    {
        $this->date2 = $date2;

        return $this;
    }

    /**
     * Get date2
     *
     * @return \DateTime
     */
    public function getDate2()
    {
        return $this->date2;
    }
}

