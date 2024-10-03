// Définition des traductions pour chaque langue
const translations = {
    fr: {
        'Accueil': 'Accueil',
        'Nos Rosters': 'Nos Rosters',
        'Staff': 'Staff',
        'Palmarès': 'Palmarès',
        'Partenaires': 'Partenaires',
        'Réseaux': 'Réseaux',
        'Shop': 'Boutique',
        'Contact': 'Contact',
        'Index': 'Nous sommes une association eSport, sous loi 1901 depuis 2020, basée à Nyons dans la Drôme (26).\n Nous participons aux nombreux tournois français & européen avec l\'objectif de faire briller nos joueurs au plus haut niveau possible !\nNous détectons et accompagnons des joueurs à fort potentiel afin de les préparer au monde professionnel de l\'eSport.',
        'Coach-1': 'Coach Mental',
        'Coach-2': 'Aide Coach',
        'Staff': 'Responsables',
        'Fonda': 'Responsables',
        'Fondateur': 'Bras Droit',
        'Modo': 'Modératrice & WebTv',
        'Tft': 'Responsable TFT',
        'Rl': 'Responsable RL',
        'Lol': 'Responsable LOL',
        'Valo': 'Responsable Valorant',
        'Web': 'Responsable Web',
        'Europe': 'Européen',
        'Commu': 'Communautaire',
        'Processus': 'L\'eSport en mode 200 iq c\'est ici !',
        'LMN8': 'L équipementier eSport & Gaming Français ',
        'Boutique': 'Accès boutique:',
        'Contact': 'Nous contacter',
        'Pseudo': 'Pseudo',
        'Mail': 'Votre email',
        'Sujet': 'Sujet',
        'Message': 'Votre message',
        'Envoie': 'Envoyer',
        'Mention': 'Mentions légales'  
    },
    en: {
        'Accueil': 'Home',
        'Nos Rosters': 'Our Rosters',
        'Staff': 'Staff',
        'Palmarès': 'Achievements',
        'Partenaires': 'Partners',
        'Réseaux': 'Network',
        'Shop': 'Shop',
        'Contact': 'Contact',
        'Index': 'We are an eSports association, established under the 1901 law since 2020, based in Nyons in Drôme (26).\nWe participate in numerous French & European tournaments with the aim of shining our players at the highest possible level! We detect and support players with high potential to prepare them for the professional world of eSports.',
        'Coach-1': 'Mental Coach',
        'Coach-2': 'Assistant Coach',
        'Staff': 'Responsible',
        'Fonda': 'CEO - Founder',
        'Fondateur': 'Right arm',
        'Modo': 'Moderator & WebTv',
        'Tft': 'TFT Manager',
        'Rl': 'RL Manager',
        'Lol': 'LOL Manager',
        'Valo': 'Valorant Manager',
        'Web': 'Web Manager',
        'Europe': 'European',
        'Commu': 'Community',
        'Processus': 'eSports in 200 iq mode is here!',
        'LMN8': 'The French eSport & Gaming equipment manufacturer',
        'Boutique': 'Shop access:',
        'Contact': 'Contact us',
        'Pseudo': 'Username',
        'Mail': 'Your email',
        'Sujet': 'Subject',
        'Message': 'Your message',
        'Envoie': 'Send',
        'Mention': 'Legal Notice'
    }
};

// Fonction pour obtenir la traduction en fonction de la langue cible et de la clé de traduction
function getTranslation(key, language) {
    if (translations[language] && translations[language][key]) {
        return translations[language][key];
    } else {
        return key; // Retourne la clé si la traduction n'existe pas
    }
}

// Fonction de changement de langue
function changeLanguage(language) {
    // Obtenez tous les éléments qui nécessitent une traduction
    const elementsToTranslate = document.querySelectorAll('[data-lang]');

    // Parcourez ces éléments
    elementsToTranslate.forEach(function(element) {
        const key = element.getAttribute('data-lang'); // Obtenez la clé de traduction
        const translatedText = getTranslation(key, language); // Obtenez le texte traduit
        element.innerText = translatedText; // Modifiez le texte de l'élément
    });
}

// Fonction pour traduire les placeholders
function translatePlaceholders(language) {
    // Obtenez tous les éléments d'entrée qui ont un attribut placeholder
    const inputElements = document.querySelectorAll('input[placeholder][data-placeholder-lang], textarea[placeholder][data-placeholder-lang]');

    // Parcourez ces éléments
    inputElements.forEach(function(input) {
        const key = input.getAttribute('data-placeholder-lang'); // Obtenez la clé de placeholder
        const translatedPlaceholder = getTranslation(key, language); // Obtenez le placeholder traduit
        input.placeholder = translatedPlaceholder; // Modifiez le placeholder
    });
}

// Écouteur d'événements pour changer la langue
document.addEventListener('DOMContentLoaded', function() {
    // Assurez-vous que le code ne se lance qu'une fois le DOM chargé
    const englishFlag = document.querySelector('.english-flag');
    if (englishFlag) {
        englishFlag.addEventListener('click', function(event) {
            event.preventDefault(); // Empêche le comportement par défaut de l'ancre
            changeLanguage('en'); // Change la langue à l'anglais
            translatePlaceholders('en'); // Traduisez également les placeholders
        });
    }
});
