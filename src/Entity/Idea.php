<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IdeaRepository")
 * @ORM\Table(name="Idea")
 */
class Idea
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="title", type="string", length=250)
     */
    private $title;

    /**
     * @ORM\Column(name="description", type="text", length=2000, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(name="author", type="string", length=100)
     */
    private $author;

    /**
     * @ORM\Column(name="is_published", type="boolean")
     */
    private $isPublished;

    /**
     * @ORM\Column(name="date_created", type="datetime")
     */
    private $dateCreated;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="ideas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): self
    {
        $this->title = $title;
        return $this;
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
    public function setDescription($description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): self
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    /**
     * @param mixed $isPublished
     */
    public function setIsPublished($isPublished): self
    {
        $this->isPublished = $isPublished;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param mixed $dateCreated
     */
    public function setDateCreated($dateCreated): self
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}