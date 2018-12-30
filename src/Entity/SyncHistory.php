<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SyncHistoryRepository")
 * @ORM\Table(name="sync_history")
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
     * @ORM\Column(type="json_array")
     */
    private $transaction_record;

    /**
     * @ORM\Column(type="integer")
     */
    private $is_success;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $destination;

    /**
     * @ORM\Column(type="string", length=65555, nullable=true)
     */
    private $error;


    /**
     * @var datetime $created_at
     *
     * @ORM\Column(type="datetime")
     */
    public $created_at;

    /**
     * @var datetime $updated_at
     *
     * @ORM\Column(type="datetime", nullable = true)
     */
    public $updated_at;


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

    public function getTransactionRecord()
    {
        return $this->transaction_record;
    }

    public function setTransactionRecord($transaction_record): self
    {
        $this->transaction_record = $transaction_record;

        return $this;
    }

    public function getIsSuccess(): ?int
    {
        return $this->is_success;
    }

    public function setIsSuccess(int $is_success): self
    {
        $this->is_success = $is_success;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;

        return $this;
    }


    /**
     * Gets triggered only on insert

     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $this->created_at = new \DateTime("now");
    }

    /**
     * Gets triggered every time on update

     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->updated_at = new \DateTime("now");
    }

}
