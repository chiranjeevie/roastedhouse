<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\NetSuiteConfigurationRepository")
 */
class NetSuiteConfiguration
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $key1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $key2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $key3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $key4;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $api_endpoint;

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

    public function getKey1(): ?string
    {
        return $this->key1;
    }

    public function setKey1(string $key1): self
    {
        $this->key1 = $key1;

        return $this;
    }

    public function getKey2(): ?string
    {
        return $this->key2;
    }

    public function setKey2(string $key2): self
    {
        $this->key2 = $key2;

        return $this;
    }

    public function getKey3(): ?string
    {
        return $this->key3;
    }

    public function setKey3(string $key3): self
    {
        $this->key3 = $key3;

        return $this;
    }

    public function getKey4(): ?string
    {
        return $this->key4;
    }

    public function setKey4(string $key4): self
    {
        $this->key4 = $key4;

        return $this;
    }

    public function getApiEndpoint(): ?string
    {
        return $this->api_endpoint;
    }

    public function setApiEndpoint(string $api_endpoint): self
    {
        $this->api_endpoint = $api_endpoint;

        return $this;
    }
}
