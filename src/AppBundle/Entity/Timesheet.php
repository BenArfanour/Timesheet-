<?php
/**
 * Created by PhpStorm.
 * User: hamza
 * Date: 26/06/18
 * Time: 10:50
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use fadosProduccions\fullCalendarBundle\Entity\Event as BaseEvent;
/**
 * @ORM\Entity
 * @ORM\Table(name="timesheet")
 */
class Timesheet extends BaseEvent

{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255,nullable=true)
     */
    private $type ;


    /**
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User" ,inversedBy="user",cascade={"remove", "persist"})
     * @ORM\JoinColumn(name="id_utilisateur",referencedColumnName="id")
     */
    private $sheets ;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Projet" ,inversedBy="projet",cascade={"remove", "persist"})
     * @ORM\JoinColumn(name="id_projet",referencedColumnName="id",nullable=true)
     */
    private $sheeets ;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Timesheet
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

    /**
     * Set sheets
     *
     * @param \Application\Sonata\UserBundle\Entity\User $sheets
     *
     * @return Timesheet
     */
    public function setSheets(\Application\Sonata\UserBundle\Entity\User $sheets = null)
    {
        $this->sheets = $sheets;

        return $this;
    }

    /**
     * Get sheets
     *
     * @return \Application\Sonata\UserBundle\Entity\User
     */
    public function getSheets()
    {
        return $this->sheets;
    }

    /**
     * Set sheeets
     *
     * @param \AppBundle\Entity\Projet $sheeets
     *
     * @return Timesheet
     */
    public function setSheeets(\AppBundle\Entity\Projet $sheeets = null)
    {
        $this->sheeets = $sheeets;

        return $this;
    }


    /**
     * Get sheeets
     *
     * @return \AppBundle\Entity\Projet
     */
    public function getSheeets()
    {
        return $this->sheeets;
    }

    public function toArray()
    {

        return array(
            'id'               => $this->id,
            'title'            => $this->type,
            'start'            => $this->startDatetime->format("Y-m-d\TH:i:sP"),
            'end'              => $this->endDatetime->format("Y-m-d\TH:i:sP"),
            'url'              => $this->url,
            'backgroundColor'  => $this->bgColor,
            'borderColor'      => $this->bgColor,
            'textColor'        => $this->fgColor,
            'className'        => $this->cssClass,
            'allDay'           => $this->allDay,
            'type'             => $this->type,
        );
    }
}
