<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Utilisateur extends \App\Entity\Utilisateur implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'dateNaissance', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'dateInscription', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'dateDerniereConnection', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'articles'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'dateNaissance', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'dateInscription', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'dateDerniereConnection', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Utilisateur' . "\0" . 'articles'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Utilisateur $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIdentifier', []);

        return parent::getUserIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateNaissance(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateNaissance', []);

        return parent::getDateNaissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateNaissance(\DateTimeInterface $dateNaissance): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateNaissance', [$dateNaissance]);

        return parent::setDateNaissance($dateNaissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateInscription(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateInscription', []);

        return parent::getDateInscription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateInscription(\DateTimeInterface $dateInscription): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateInscription', [$dateInscription]);

        return parent::setDateInscription($dateInscription);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDerniereConnection(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDerniereConnection', []);

        return parent::getDateDerniereConnection();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDerniereConnection(?\DateTimeInterface $dateDerniereConnection): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDerniereConnection', [$dateDerniereConnection]);

        return parent::setDateDerniereConnection($dateDerniereConnection);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom(string $prenom): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getArticles(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArticles', []);

        return parent::getArticles();
    }

    /**
     * {@inheritDoc}
     */
    public function addArticle(\App\Entity\Article $article): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addArticle', [$article]);

        return parent::addArticle($article);
    }

    /**
     * {@inheritDoc}
     */
    public function removeArticle(\App\Entity\Article $article): \App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeArticle', [$article]);

        return parent::removeArticle($article);
    }

}
