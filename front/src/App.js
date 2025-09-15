import React, { useState, useEffect } from 'react';
import './App.css';

function App() {
  // Un state pour stocker la liste des animaux
  const [animals, setAnimals] = useState([]);

  // Le hook useEffect s'exécute après le rendu initial du composant
  useEffect(() => {
    // Appelle l'API Laravel pour récupérer les données
    fetch('http://127.0.0.1:8000/api/animals')
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.json();
      })
      .then(data => {
        console.log(data); // Affiche les données dans la console du navigateur
        setAnimals(data); // Met à jour le state avec les données reçues
      })
      .catch(error => console.error('Erreur lors de la récupération des animaux :', error));
  }, []); // Le tableau vide [] garantit que l'effet ne s'exécute qu'une seule fois

  return (
    <div className="App">
      <header className="App-header">
        <h1>Gestion de Troupeau</h1>
        <h2>Liste des animaux</h2>
        <ul>
          {animals.map(animal => (
            <li key={animal.id}>
              <strong>Nom:</strong> {animal.name} | <strong>Sexe:</strong> {animal.sex} | <strong>Identifiant:</strong> {animal.identifier}
            </li>
          ))}
        </ul>
      </header>
    </div>
  );
}

export default App;