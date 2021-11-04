name: inverse
class: center, middle, inverse
# Modele Conceptuel - SQL
# .red[Methode Merise]
![Right-aligned image](https://ri7.fr/wp-content/uploads/2020/12/logo2-h-195x64-light.png)

---

class: middle
.left-column[
## Objectif
]
.right-column[
- Vous présenter la méthode de conception des systèmes d’information Merise.

- Vous rendre capable de concevoir ou de participer à la conception d’un système d’information. 

- Vous permettre d'apporter des solutions pertinantes aux projet.

- Vous permettre de repondre aux besoin de votre entreprise.

- Gagner en confiance et motivation
]

---

class: middle
.left-column[
## Objectif
## Au programme
]
.right-column[
- **Méthode MERISE**
- **Modele Conceptuel de Données**
  - Entité
  - Relations
  - Héritage
- **Modele Logique Relationnel**
- **SQL**
  - select
  - order by
  - limit
  - where
  - functions
]
---
class: center, middle, inverse
# 1. Méthode MERISE
---

class: middle
.left-column[
## Présentation
]
.right-column[
La conception d'un système d'information n'est pas évidente car il faut réfléchir à l'ensemble de l'organisation que l'on doit mettre en place. La phase de conception nécessite des méthodes permettant **de mettre en place un modèle** sur lequel on va s'appuyer. 

**La modélisation** consiste à créer une représentation virtuelle d'une réalité de telle façon à faire ressortir les points auxquels on s'intéresse.

Ce type de méthode est appelé **analyse**. Il existe plusieurs méthodes d'analyse, la méthode la plus utilisée en France est la méthode **MERISE**.

**MERISE** est une méthode de conception, de développement et de réalisation de projets informatiques. Le but de cette méthode est d'arriver à concevoir un système d'information. La méthode MERISE est basée sur **la séparation des données et des traitements à effectuer** en plusieurs modèles conceptuels et physiques.

La séparation des données et des traitements assure une longévité au modèle. En effet, l'agencement des données n'a pas à être souvent remanié, tandis que les traitements le sont plus fréquemment.
]
---

class: middle
.left-column[
## Présentation
## Système d'information
]
.right-column[
### Qu’est-ce qu’un système ?
Un système est **un ensemble d’éléments matériels ou immatériels en interaction** (hommes, machines, règles…) transformant par un processus des éléments en d’autres éléments.
Une entreprise qui fonctionne en vue de réaliser ses objectifs est une forme de système.
Il existe différents types de système :
* **Le système opérant :** comparable à une boîte noire, il s’agit d’un système physique qui transforme un flux physique entrant (matière première, flux financier…) en un flux physique de sortie (produit, service…).

* **Le système de pilotage :** son rôle est de réguler et contrôler le système opérant, et adapte son fonctionnement en fonction des objectifs prédéfinis. 

Afin de faire l’interface entre le système opérant et le système de pilotage, il est nécessaire de mettre en place le système d’information.
]
---

class: middle
.left-column[
## Présentation
## Système d'information
]
.right-column[
![Right-aligned image](img/systemes.png)

On peut comparer le système d’information à une **« boîte noire »** par laquelle transitent les principaux flux d’information entre le système de pilotage et le système opérant d’une part (règles de fonctionnement, ressources allouées, priorités d’exécution)

Le système d’information assure donc l’interface entre les systèmes opérant et de pilotage, mais il peut aussi assurer l’interface avec le pôle client et/ou le pôle fournisseur. Le système d’information n’est pas fermé sur une organisation interne
]

---

class: middle
.left-column[
## Présentation
## Système d'information
## Cycle de Conception d'un Système d'information
]
.right-column[
.pull-left.center[
![Right-aligned image](img/cycle.gif)
]
.pull-right[
La conception du système d'information se fait par étapes, afin d'aboutir à un système d'information fonctionnel reflétant une réalité physique
* **Système d'information manuel :** Faire l'inventaire des éléments nécessaires au système
* **Expression des besoins :** Délimiter le système en s'informant auprès des futurs utilisateurs
Grâce à ses deux étapes nous avons ce que l'on attend du système d'informtion
* **Modèle conceptuel :** Décrit les règles et les contraintes à prendre en compte.
* **Modele Logique :** Représente le choix logiciel pour le système d'information.
* **Modèle physique :** reflète le choix matériel pour le système d'information.
]
]

---

class: middle
.left-column[
## Présentation
## Système d'information
## Cycle de Conception d'un Système d'information
## Niveaux de Modelisations
]
.right-column[
Les trois niveaux conceptuel, logique, et physique facilitent l’analyse d’un problème en se focalisant respectivement sur les aspects de gestion, d’organisation, et d’implémentation.

![Right-aligned image](img/levels.png)


Aborder un problème selon ces trois axes en facilite l’analyse. Ainsi, 
* **Le gestionnaire** définira les traitements relatifs à une commande reçue dans l’entreprise,
* **Les aspects organisationnels** seront étudiés par l’organisateur, 
* **L’informaticien** précisera les moyens techniques à mettre en œuvre pour satisfaire les besoins relatifs aux niveaux précédents.

]

---

class: middle
.left-column[
## Présentation
## Système d'information
## Cycle de Conception d'un Système d'information
## Niveaux de Modelisations
]
.right-column[
  Ce tableau fait clairement apparaître les modèles que propose la méthode MERISE pour la
formalisation des données et des traitements à chacun des niveaux supportés. Les différents
modèles Merise sont donc :
* **MCD :** Modèle Conceptuel de Données
* **MCT :** Modèle Conceptuel de Traitements
* **MLD :** Modèle Logique de Données
* **MOT :** Modèle Organisationnel de Traitements
* **MPD :** Modèle Physique de Données
* **MPT :** Modèle Physique de Traitements.

La séparation des données et des traitements est conforme aux principes des bases de données relationnelles. Elle met en évidence la relative invariance des données par rapport aux traitements. 

**Par exemple**, un processus de facturation peut consister en l’envoi d’une facture et l’attente du paiement ou en prélèvement automatique. Pour autant, les données nécessaires à chacun de ces traitements restent sensiblement les mêmes.
]
---
class: center, middle, inverse
# 2. Modèle Conceptuel de données
.red[MCD]
---

class: middle
.left-column[
## Presentation
]
.right-column[
Le modèle conceptuel des données **(MCD)** a pour but d'écrire de façon formelle les données qui seront utilisées par le système d'information. Il s'agit donc d'une représentation des données, facilement compréhensible, permettant de décrire le système d'information à l'aide d'entités.

Il doit être le plus complet possible. Sa représentation doit se faire en toute indépendance de considérations techniques et/ou organisationnelles. Le MCD est une représentation statique des données et, par conséquent, ne doit comporter aucune référence aux traitements effectués.

Le Modèle Conceptuel de Données (MCD) permet de faire la description des données et des relations entre les données, grâce aux concepts du formalisme **Entité-Association**. 
]

---

.left-column[
## Presentation
## Entité
]
.right-column[
**L'entité** est définie comme un objet de gestion considéré d'intérêt pour représenter l'activité à modéliser (exemple : entité `Pays`, `Eleve`, ...). 

**L’élève** est une entité, l’élève **« Pierre Dupond »** est une occurrence de l’entité élève. 
  .pull-left.center[
    ![Right-aligned image](img/entity-simple.png)
  ]

  .pull-left.center[
    ![Right-aligned image](img/entity-name.png)
  ]
]
---

.left-column[
## Presentation
## Entité
## Propriété
]
.right-column[
À son tour, chaque entité (ou objet) est porteuse d'une ou **plusieurs propriétés**.

**Une propriété** est une donnée élémentaire susceptible de prendre une valeur. C’est le plus petit élément manipulé du système d’information et qui a un sens en lui-même. 

Une propriété peut-être élémentaire ou calculée, simple ou composée.

* La note d’un élève est une propriété élémentaire, en revanche sa moyenne est une propriété calculée.

* La date de naissance de l’élève est une propriété simple alors que le nom complet de l’élève est une propriété composée.

.center[
  ![Right-aligned image](img/entity-property.png)
> *Le nom de la propriété est inscrit à l’intérieur de l’entité.*
]
]

---
.left-column[
## Presentation
## Entité
## Propriété
## Identifiant
]
.right-column[
**L’identifiant est une propriété particulière de l’entité** telle qu’à chaque valeur de la propriété corresponde une et une seule occurrence de l’entité. 

La valeur de l’identifiant **rend unique chaque occurrence** de l’entité. Ainsi pour éviter les synonymes, **les numéros ou les codes font les meilleurs identifiants**.

.center[
  ![Right-aligned image](img/entity-id.png)
> *Dans le MCD, l’identifiant figure en première position dans la liste des propriétés et est souligné*
]
.small[
* **Le numéro d’un élève** sera l’identifiant pour l’entité élève, son nom ne suffirait pas pour l’identifier de manière unique dans le SI.

* **Le numéro INSEE** pourra être l’identifiant d’une personne.

* **Le numéro d’immatriculation** pourra être l’identifiant de l’entité voiture.
]

]

---
.left-column[
## Relation / Association
### Définition
]
.right-column[
**Une association** est la représentation **d’une relation entre plusieurs entités**. Elle est dépourvue d’existence propre et est subordonnée à l’existence des entités qui la composent. 

Pour définir la reation on utilise généralement un verbe.

L’entité `Eleve` est en association avec l’entité `Classe`.

.center[
  ![Right-aligned image](img/relation.png)
> *La relation peut être binaire*
]

.small[
**On traduit par :**
* L'élève **a une** classe.

* La classe **a un ou plusieurs** élèves.
]
]

---
.left-column[
## Relation / Association
### Définition
### Porteuse de données
]
.right-column[
La relation peut aussi **être porteuse d’une ou plusieurs propriétés** : 

L’entité `Eleve` est en association avec l’entité `Matiere` et porte la propriété `note`.

.center[
  ![Right-aligned image](img/relation-properties.png)
> *La relation peut être porteuse de données*
]
.small[
**On traduit par :**
* L'élève **a une ou plusieurs notes** de matières.

* Une Matière **a une ou plusieurs notes** d'élèves.
]

]

---
.left-column[
## Relation / Association
### Définition
### Porteuse de données
### Relation n-aire
]
.right-column[
La relation peut aussi être lié à plus de deux entités.

L’entité `Eleve` est en association avec les entités `Matiere`, `Examen` et porte la propriété `note`.

.center[
  ![Right-aligned image](img/relation-n-aire.png)
> *Relation ternaire*
]
.small[
**On traduit par :**
* L'élève **a une ou plusieurs notes** de matières pour une ou plusieurs examens.

* Une Matière **a une ou plusieurs notes** d'élèves pour une ou plusieurs examens.

* Un Examen **a une ou plusieurs notes** d'élèves pour une ou plusieurs matières.
]

.red[
  <i class="fas fa-info-circle"></i> Dans une relation ternaire, il n’y a jamais de cardinalités à 1,1 ou 0,1]
]

---
.left-column[
## Relation / Association
### Définition
### Porteuse de données
### Relation n-aire
### Relation réflexive
]
.right-column[
La relation peut être aussi **réflexive** (ou unaire). C’est une relation qui relie une entité à elle-même.
.center[
  ![Right-aligned image](./img/relation-reflexive.png)
> *Relation reflexive*
]
.small[
**On traduit par :**
* L'élève **a une ou plusieurs notes** de matières pour une ou plusieurs examens.

* Une Matière **a une ou plusieurs notes** d'élèves pour une ou plusieurs examens.

* Un Examen **a une ou plusieurs notes** d'élèves pour une ou plusieurs matières.
]
]