<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 * @ORM\Table(name="categories")
 */
class Category
{
    public  const FULL_TIME_TYPE='full-time';
    public  const PART_TIME_TYPE='part-time';
    public  const FREELANCE_TYPE='freelance';

    public const TYPES=[
        self::FULL_TIME_TYPE,
        self::PART_TIME_TYPE,
        self::FREELANCE_TYPE,
    ];


    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=128, unique=true)
     * @Gedmo\Slug(fields={"name"})
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=128, unique=true)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $name;

    /**
     * @var Job[]|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Job", mappedBy="category")
     */
    private $jobs;

    /**
     * @var Affiliate[]|ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Affiliate", mappedBy="categories")
     */
    private $affiliates;

    public function __construct()
    {
        $this->jobs = new ArrayCollection();
        $this->affiliates = new ArrayCollection();
    }

    /**
     * @return string|null
     */
    public function getSlug() : ?string
    {
        return $this->slug;
    }

    /**
     * @param  string $slug
     */
    public function setSlug(string $slug) : void
    {
        $this->slug=$slug;
    }

    /**
     * @return int
     */
    public function getId() : ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Job[]|ArrayCollection
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * @return Job[]|ArrayCollection
     */
    public function getActiveJobs()
    {
        return $this->jobs->filter(function(Job $job) {
            return $job->getExpiresAt() > new \DateTime();
        });
    }

    /**
     * @param Job $job
     *
     * @return self
     */
    public function addJob(Job $job) : self
    {
        if (!$this->jobs->contains($job)) {
            $this->jobs->add($job);
        }

        return $this;
    }

    /**
     * @param Job $job
     *
     * @return self
     */
    public function removeJob(Job $job) : self
    {
        $this->jobs->removeElement($job);

        return $this;
    }

    /**
     * @return Affiliate[]|ArrayCollection
     */
    public function getAffiliates()
    {
        return $this->affiliates;
    }

    /**
     * @param Affiliate $affiliate
     *
     * @return self
     */
    public function addAffiliate($affiliate) : self
    {
        if (!$this->affiliates->contains($affiliate)) {
            $this->affiliates->add($affiliate);
        }

        return $this;
    }

    /**
     * @param Affiliate $affiliate
     *
     * @return self
     */
    public function removeAffiliate($affiliate) : self
    {
        $this->affiliates->removeElement($affiliate);

        return $this;
    }
}
