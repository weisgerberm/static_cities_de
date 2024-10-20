<?php

declare(strict_types=1);

namespace Weisgerber\StaticCitiesDe\Domain\Model;
class Record extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    public const string TABLE_NAME = 'tx_staticcitiesde_domain_model_record';

    /**
     * string to provide the possibility for zips to begin with a zero
     *
     */
    protected string $zip;

    protected string $city;

    protected string $state;

    protected string $community;

    protected string $latitude;

    protected string $longitude;

    protected string $email;

    protected string $website;
    public function getZip(): string
    {
        return $this->zip;
    }
    public function setZip(string $zip): void
    {
        $this->zip = $zip;
    }
    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function getCommunity(): string
    {
        return $this->community;
    }

    public function setCommunity(string $community): void
    {
        $this->community = $community;
    }

    public function getLatitude(): string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function getLongitude(): string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): void
    {
        $this->longitude = $longitude;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getWebsite(): string
    {
        return $this->website;
    }

    public function setWebsite(string $website): void
    {
        $this->website = $website;
    }
}
