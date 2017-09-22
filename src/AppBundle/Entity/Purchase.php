<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Purchase
 *
 * @ORM\Table(name="purchase")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PurchaseRepository")
 */
class Purchase
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePurchase", type="datetime")
     */
    private $datePurchase;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float")
     */
    private $amount;

    /**
     * @var int
     *
     * @ORM\Column(name="duration", type="integer")
     */
    private $duration;

    /**
     * @var int
     *
     * @ORM\Column(name="product", type="integer")
     */
    private $product;


   /**
     * @var int
     *
     * @ORM\Column(name="member", type="integer")
     */
    private $member;

    /**
     * @var int
     *
     * @ORM\Column(name="confirm", type="integer")
     */
    private $confirm;


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
     * Set datePurchase
     *
     * @param \DateTime $datePurchase
     * @return Purchase
     */
    public function setDatePurchase($datePurchase)
    {
        $this->datePurchase = $datePurchase;

        return $this;
    }

    /**
     * Get datePurchase
     *
     * @return \DateTime 
     */
    public function getDatePurchase()
    {
        return $this->datePurchase;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return Purchase
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Purchase
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }



    /**
     * Set product
     *
     * @param integer $product
     * @return Purchase
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return integer 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set member
     *
     * @param integer $member
     * @return Purchase
     */
    public function setMember($member)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return integer 
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Set confirm
     *
     * @param integer $confirm
     * @return Purchase
     */
    public function setConfirm($confirm)
    {
        $this->confirm = $confirm;

        return $this;
    }

    /**
     * Get confirm
     *
     * @return integer 
     */
    public function getConfirm()
    {
        return $this->confirm;
    }
}
