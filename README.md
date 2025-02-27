# ECF1 - Création d’une application de gestion de réservation pour une salle de sport

## 📌 Sujet d’ECF - CDA Rayane MEYFROOT

## 🎯 Contexte du projet

La salle de sport **FitLife** souhaite mettre en place une **application web** permettant à ses clients de gérer leurs réservations pour des cours collectifs.

### **Fonctionnalités principales**

- 📋 **Consulter** la liste des cours disponibles (yoga, cardio, musculation, etc.).
- 📅 **Réserver** un créneau horaire pour un cours.
- 👀 **Visualiser** ses réservations.
- 🔧 **Administrer** les cours et les créneaux (ajout, modification, suppression).

## 🛠 Technologies utilisées

### **Modélisation**

- Utilisation de **Looping** pour concevoir les schémas (MCD, MLD, UML).

### **Développement**

- Framework **Laravel**.
- **Breeze** pour la gestion de l’authentification.
- Installation des composants nécessaires avec **Laravel Herd**.

### **Base de données**

- **SQLite** (choisi pour faciliter la mise en place dans un contexte limité en temps).
- **Possibilité de migrer vers MySQL** ultérieurement si besoin.

## 📌 Modélisation

### 🖼 Modèle Conceptuel de Données (MCD)
![Modèle Conceptuel de Données](Conception_Schema\MCD.png)

### 🖼 Diagramme UML
![Diagramme UML](Conception_Schema\UML.png)

## 🚀 Mise en place du projet

### **Installation et configuration**

1. **Cloner le projet dans la workspace Laravel Herd**.
2. **Lancer l'application** :
   - Accès via **fitlife.test** dans la barre de recherche.
   - Assurez-vous que Laravel Herd est bien configuré.
3. **Activer la suppression en cascade** pour SQLite avec la commande :
   ```sql
   PRAGMA foreign_keys = ON;
   ```
4. **Relancer les migrations et ajouter des données de test** :
   - Pour réinitialiser la base de données et relancer les migrations :
     ```bash
     php artisan migrate:refresh
     ```
   - Pour ajouter des données de test avec les factories :
     ```bash
     php artisan db:seed
     ```
   - **Note** : La table `creneaux_user` (table des réservations) doit être remplie manuellement pour tester les réservations, car aucune autre méthode d’ajout n’est encore implémentée.

## 🔥 Fonctionnalités actuelles

- Possibilité de voir les créneaux disponibles.
- Possibilité de créer un compte.
- Possibilité de se connecter.
- Possibilité de visualiser les réservations du compte connecté (section réservations du profil).
- Possibilité de supprimer son compte.

## 🚧 Fonctionnalités à implémenter

### **À court terme**

- Affichage du nombre de places restantes pour un créneau sur la page d'accueil.
  - (Le champ `nb_place` est déjà implémenté, il reste à décrémenter le nombre de places à chaque nouvelle réservation).
- Ajouter un bouton pour réserver un créneau lorsque l'utilisateur est connecté.
- Ajouter la possibilité de supprimer une réservation.

### **Pour l'administrateur**

- Ajouter la possibilité d'ajouter des cours.
- Ajouter la possibilité d'ajouter des créneaux.
- Ajouter la possibilité de supprimer des cours.
- Ajouter la possibilité de supprimer des créneaux.
- Ajouter la possibilité de supprimer des réservations.
