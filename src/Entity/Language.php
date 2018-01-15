<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\LanguageRepository")
 */
class Language
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var Country
     * @ORM\ManyToOne(targetEntity="Country",inversedBy="languages")
     */
    private $country;
    /**
     * @ORM\Column(type="string")
     */
    private $keywords;
    /**
     * @ORM\Column(type="string")
     */
    private $description;
    /**
     *     /**
     * @ORM\Column(type="string")
     */
    private $title;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @return Country
     */
    public function getCountry(): Country
    {
        return $this->country;
    }
    /**
     * @param Country $country
     */
    public function setCountry(Country $country): void
    {
        $this->country = $country;
    }
    /**
     * @return mixed
     */
    public function getKeyword()
    {
        return $this->keywords;
    }
    /**
     * @param mixed $keywords
     */
    public function setKeyword($keywords): void
    {
        $this->keywords = $keywords;
    }
    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @param mixed $description
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }
}