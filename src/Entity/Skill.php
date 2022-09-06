<?php

namespace App\Entity;

use App\Repository\SkillRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Captcha\Bundle\CaptchaBundle\Validator\Constraints as CaptchaAssert;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=SkillRepository::class)
 */
class Skill
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("skill:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("skill:read")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("skill:read")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     * @Groups("skill:read")
     */
    private $diffculty;

    /**
     * @ORM\ManyToMany(targetEntity=Seance::class, inversedBy="skills")
     */
    private $seances;
   
    /**
   * @CaptchaAssert\ValidCaptcha(
   *      message = "CAPTCHA validation failed, try again."
   * )
   */
  protected $captchaCode;

  public function getCaptchaCode()
  {
    return $this->captchaCode;
  }

  public function setCaptchaCode($captchaCode)
  {
    $this->captchaCode = $captchaCode;
  }

    public function __construct()
    {
        $this->seances = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDiffculty(): ?int
    {
        return $this->diffculty;
    }

    public function setDiffculty(int $diffculty): self
    {
        $this->diffculty = $diffculty;

        return $this;
    }

    /**
     * @return Collection<int, Seance>
     */
    public function getSeances(): Collection
    {
        return $this->seances;
    }

    public function addSeance(Seance $seance): self
    {
        if (!$this->seances->contains($seance)) {
            $this->seances[] = $seance;
        }

        return $this;
    }

    public function removeSeance(Seance $seance): self
    {
        $this->seances->removeElement($seance);

        return $this;
    }


    public function __toString()
    {
        return $this->getName();
    }
}
