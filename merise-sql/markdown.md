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
- Savoir analyser un context

- Apporter des solutions pertinantes

- Vous permettre de repondre aux besoin de votre entreprise

- Gagner en confiance et motivation
]

---

class: middle
.left-column[
## Objectif
## Methodes MERISE
]
.right-column[
La conception d'un système d'information n'est pas évidente car il faut réfléchir à l'ensemble de l'organisation que l'on doit mettre en place. La phase de conception nécessite des méthodes permettant de mettre en place un modèle sur lequel on va s'appuyer. La modélisation consiste à créer une représentation virtuelle d'une réalité de telle façon à faire ressortir les points auxquels on s'intéresse.

Ce type de méthode est appelé analyse. Il existe plusieurs méthodes d'analyse, la méthode la plus utilisée en France étant la méthode MERISE.


]

---

class: middle
.left-column[
## Objectif
## Qu'est-ce que le modele conceptuel
## Au programme
]

.right-column[
- **MCD**
  - Entité
  - Relations
- **MLR**
- **SQL**
  - select
  - order by
  - limit
  - where
  - functions
    - count
    - if
    - 
]

---
class: inverse middle

# 1. Modele Conceptuel des Données
.red[MCD]

---

.left-column[
## Qu'est-ce que le MCD
## Entité
]

.right-column[
  **Le Modèle conceptuel des données (ou MCD),** schéma représentant la structure du système d'information, du point de vue des données, c'est-à-dire les dépendances ou relations entre les différentes données du système d'information (par exemple : le client, la commande, les produits, etc.),

  Le MCD repose sur les notions d'entité et d'association et sur les notions de relations. Le modèle conceptuel des données s'intéresse à décrire la sémantique du domaine (entity/relationship en anglais).
]
---

.left-column[
## Qu'est-ce que le MCD
## Entité
]

.right-column[
L'entité est définie comme un objet de gestion considéré d'intérêt pour représenter l'activité à modéliser (exemple : entité pays). À son tour, chaque entité (ou objet) est porteuse d'une ou plusieurs propriétés simples, dites atomiques (exemples : code, nom, capitale, population, superficie) dont l'une, unique et discriminante, est désignée comme identifiant (exemple : code).

]