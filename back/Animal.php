<?php

require 'Sex.php';

use DateTime;

class Animal {
    // Déclaration des propriétés de l'animal.
    private Sex $sex;
    private string $identifier;
    private string $name;
    private DateTime $birth_date;        // Date de naissance
    private ?DateTime $death_date = null; // Date de décès (peut être nulle)
    private ?Animal $parent_male = null;
    private ?Animal $parent_female = null;

    /**
     * Constructeur de la classe Animal.
     * @param Sex $sex Sexe de l'animal.
     * @param string $identifier Identifiant unique de l'animal.
     * @param string $name Nom de l'animal.
     * @param DateTime $birth_date Date de naissance de l'animal.
     * @param Animal|null $parent_male Parent mâle de l'animal (optionnel).
     * @param Animal|null $parent_female Parent femelle de l'animal (optionnel).
     */
    public function __construct(
        Sex $sex,
        string $identifier,
        string $name = null,
        DateTime $birth_date,
        ?Animal $parent_male = null,
        ?Animal $parent_female = null
    ) {
        $this->sex = $sex;
        $this->identifier = $identifier;
        $this->name = $name;
        $this->birth_date = $birth_date;
        $this->parent_male = $parent_male;
        $this->parent_female = $parent_female;
    }

    // --- Getters ---
    public function getSex(): Sex {
        return $this->sex;
    }

    public function getIdentifier(): string {
        return $this->identifier;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getBirthDate(): DateTime {
        return $this->birth_date;
    }
    
    // Le getter pour la date de décès doit retourner un type nullable.
    public function getDeathDate(): ?DateTime {
        return $this->death_date;
    }

    public function getParentMale(): ?Animal {
        return $this->parent_male;
    }

    public function getParentFemale(): ?Animal {
        return $this->parent_female;
    }

    // --- Setters ---
    public function setName(string $name): void {
        if($this->name == null)[
            $this->name = $name;
        ]else{
            throw new InvalidArgumentException("L'animal a déjà un nom.");
        }
    }
    
    // Setter pour la date de décès.
    public function setDeathDate(DateTime $death_date): void {
        // Vérification pour s'assurer que le décès est postérieur à la naissance.
        if ($death_date < $this->birth_date) {
            throw new InvalidArgumentException("La date de décès ne peut pas être antérieure à la date de naissance.");
        }
        $this->death_date = $death_date;
    }

    public function setParentMale(?Animal $parent_male): void {
        $this->parent_male = $parent_male;
    }

    public function setParentFemale(?Animal $parent_female): void {
        $this->parent_female = $parent_female;
    }
}