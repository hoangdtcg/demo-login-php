<?php

namespace AppDemo\Model;
class Customer
{
    private $customerNumber;
    private $customerName;
    private $contactLastName;
    private $contactFirstName;
    private $phone;
    private $addressLine1;
    private $city;
    private $country;

    /**
     * Customer constructor.
     * @param $customerNumber
     * @param $customerName
     * @param $contactLastName
     * @param $contactFirstName
     * @param $phone
     * @param $addressLine1
     * @param $city
     * @param $country
     */
    public function __construct($customerNumber, $customerName, $contactLastName, $contactFirstName, $phone, $addressLine1, $city, $country)
    {
        $this->customerNumber = $customerNumber;
        $this->customerName = $customerName;
        $this->contactLastName = $contactLastName;
        $this->contactFirstName = $contactFirstName;
        $this->phone = $phone;
        $this->addressLine1 = $addressLine1;
        $this->city = $city;
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * @param mixed $customerNumber
     */
    public function setCustomerNumber($customerNumber): void
    {
        $this->customerNumber = $customerNumber;
    }

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param mixed $customerName
     */
    public function setCustomerName($customerName): void
    {
        $this->customerName = $customerName;
    }

    /**
     * @return mixed
     */
    public function getContactLastName()
    {
        return $this->contactLastName;
    }

    /**
     * @param mixed $contactLastName
     */
    public function setContactLastName($contactLastName): void
    {
        $this->contactLastName = $contactLastName;
    }

    /**
     * @return mixed
     */
    public function getContactFirstName()
    {
        return $this->contactFirstName;
    }

    /**
     * @param mixed $contactFirstName
     */
    public function setContactFirstName($contactFirstName): void
    {
        $this->contactFirstName = $contactFirstName;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * @param mixed $addressLine1
     */
    public function setAddressLine1($addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

}