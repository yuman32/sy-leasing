<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class MemberAccount extends \AppBundle\Entity\MemberAccount implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'fname', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'lname', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'birthday', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'gender', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'zip', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'phone', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'address', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'employer', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'selfEmployee', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'account');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'fname', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'lname', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'birthday', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'gender', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'zip', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'phone', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'address', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'employer', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'selfEmployee', '' . "\0" . 'AppBundle\\Entity\\MemberAccount' . "\0" . 'account');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (MemberAccount $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFname($fname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFname', array($fname));

        return parent::setFname($fname);
    }

    /**
     * {@inheritDoc}
     */
    public function getFname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFname', array());

        return parent::getFname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLname($lname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLname', array($lname));

        return parent::setLname($lname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLname', array());

        return parent::getLname();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirthday($birthday)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirthday', array($birthday));

        return parent::setBirthday($birthday);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirthday()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirthday', array());

        return parent::getBirthday();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender($gender)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', array($gender));

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getGender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', array());

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setZip($zip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZip', array($zip));

        return parent::setZip($zip);
    }

    /**
     * {@inheritDoc}
     */
    public function getZip()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZip', array());

        return parent::getZip();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', array($phone));

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', array());

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', array($address));

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', array());

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployer($employer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployer', array($employer));

        return parent::setEmployer($employer);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployer', array());

        return parent::getEmployer();
    }

    /**
     * {@inheritDoc}
     */
    public function setSelfEmployee($selfEmployee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSelfEmployee', array($selfEmployee));

        return parent::setSelfEmployee($selfEmployee);
    }

    /**
     * {@inheritDoc}
     */
    public function getSelfEmployee()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSelfEmployee', array());

        return parent::getSelfEmployee();
    }

    /**
     * {@inheritDoc}
     */
    public function setAccount(\AppBundle\Entity\User $account = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccount', array($account));

        return parent::setAccount($account);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccount', array());

        return parent::getAccount();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
