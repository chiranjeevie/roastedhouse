<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SyncHistoryRepository")
 */
class SyncHistory
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=65555)
     */
    private $source;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dest;

    /**
     * @ORM\Column(type="string", length=65555)
     */
    private $trans_record;

    /**
     * @ORM\Column(type="integer")
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=65555)
     */
    private $error;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getDest(): ?string
    {
        return $this->dest;
    }

    public function setDest(string $dest): self
    {
        $this->dest = $dest;

        return $this;
    }

    public function getTransRecord(): ?string
    {
        return $this->trans_record;
    }

    public function setTransRecord(string $trans_record): self
    {
        $this->trans_record = $trans_record;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(string $error): self
    {
        $this->error = $error;

        return $this;
    }
}
