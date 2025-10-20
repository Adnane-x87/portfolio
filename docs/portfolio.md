---
theme: uncover
_class: lead
paginate: true
backgroundColor: #7ee0b9
color: #2e5c4d
style: |
    h1 {
      font-size: 3em;
      text-align: center;
      padding-top: 25%;
    }
    h2 {
        font-size: 2em;
        color: #2e5c4d;
    }
    h3 {
        font-size: 1.5em;
        color: #2e5c4d;
    }
    section ul li {
        margin-bottom: 0.5em;
    }
    section.lead {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .watermark-top-left {
        position: absolute;
        top: 20px;
        left: 20px;
        width: 100px;
        height: auto;
        opacity: 0.7;
    }
    .watermark-bottom-right {
        position: absolute;
        bottom: 20px;
        right: 20px;
        width: 100px;
        height: auto;
        opacity: 0.7;
    }
    .footer {
        position: absolute;
        bottom: 30px;
        left: 30px;
        font-size: 0.8em;
        color: #2e5c4d;
    }
---

<style>
section.lead h1 {
    font-size: 5em;
    color: #2e5c4d;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
}
section.lead .footer {
    font-size: 1.2em;
    color: #2e5c4d;
}
</style>

<div class="watermark-top-left"></div>

# Portfolio Project

<div class="footer">
    by Adnane Kesksu
</div>

<div class="watermark-bottom-right"></div>

---

<style>
section h2 {
    text-align: left;
    margin-bottom: 1em;
    color: #2e5c4d;
}
section ul {
    list-style: disc;
    margin-left: 2em;
    color: #2e5c4d;
}
section strong {
    color: #2e5c4d;
}
section .footer {
    position: absolute;
    bottom: 30px;
    left: 30px;
    font-size: 0.8em;
    color: #2e5c4d;
}
</style>

## besoins de Ayoub jalyta

* Mettre en valeur mes compétences  
* Présenter mes projets  
* Augmenter ma visibilité  
* Créer des opportunités professionnelles  

### Technologies : **Laravel**

## Fonctionnelles

1. Accueil (Home)  
2. À propos (About / Bio)  
3. Compétences (Skills)  
4. Projets (Projects / Portfolio)  
5. Contact  

<div class="footer">
    by Adnane Kesksu
</div>

---

<style>
section {
    background-color: #7ee0b9;
}
section h1 {
    color: #2e5c4d;
    text-align: center;
    margin-bottom: 1em;
}
.example-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-top: 20px;
    max-width: 90%;
    margin-left: auto;
    margin-right: auto;
}
.example-box {
    background-color: transparent;
    display: flex;
    justify-content: center;
    align-items: center;
}
.example-box img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.3);
}
.full-width-box {
    grid-column: span 2;
    background-color: transparent;
    display: flex;
    justify-content: center;
    align-items: center;
}
.full-width-box img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.3);
}
</style>

# Exemple de l'existant

<div class="example-container">
    <!-- Première rangée : 2 images côte à côte -->
    <div class="example-box">
        <img src="./exmple1.png" alt="Exemple 1" />
    </div>
    <div class="example-box">
        <img src="./exmple2.png" alt="Exemple 2" />
    </div>
      <div class="full-width-box">
        <img src="./exmple3.png" alt="Exemple 3" />
    </div>
  
  
</div>

---

<style>
section h1 {
    color: #2e5c4d;
    text-align: center;
    margin-bottom: 1em;
}
.diagram-container {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 70%;
    max-width: 90%;
    margin-left: auto;
    margin-right: auto;
}
.diagram-container img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}
</style>

# Diagramme de cas d'utilisation

<div class="diagram-container">
    <img src="./diagramme.png" alt="Use Case Diagram" />
</div>

---

<style>
section h1 {
    color: #2e5c4d;
    text-align: center;
    margin-bottom: 1em;
}
.conception-diagram-container {
    background-color: #2c2c3e;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 70%;
    max-width: 90%;
    margin-left: auto;
    margin-right: auto;
}
.conception-diagram-container img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    filter: invert(100%) hue-rotate(180deg);
}
</style>

# Conception

<div class="conception-diagram-container">
    <img src="./Conception.png" alt="Conception Flowchart" />
</div>
