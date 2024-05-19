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
        'LMN8': 'L’équipementier eSport & Gaming Français ',
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
        'Coach-2': 'Assistant Coach ',
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
    // Vérifie si la clé de traduction existe pour la langue donnée
    if (translations[language] && translations[language][key]) {
        return translations[language][key];
    } else {
        // Si la clé de traduction n'existe pas, retourne la clé elle-même
        return key;
    }
}

// Fonction de changement de langue
function changeLanguage(language) {
    // Obtenez tous les éléments qui nécessitent une traduction
    var elementsToTranslate = document.querySelectorAll('[data-lang]');

    // Parcourez ces éléments
    elementsToTranslate.forEach(function(element) {
        // Obtenez la clé de traduction à partir de l'attribut data-lang
        var key = element.getAttribute('data-lang');

        // Obtenez le texte traduit en fonction de la clé et de la langue
        var translatedText = getTranslation(key, language);

        // Modifiez le texte de l'élément
        element.innerText = translatedText;
    });
}

// Fonction pour traduire les placeholders
function translatePlaceholders(language) {
    // Obtenez tous les éléments d'entrée qui ont un attribut placeholder
    var inputElements = document.querySelectorAll('input[placeholder][data-placeholder-lang], textarea[placeholder][data-placeholder-lang]');

    // Parcourez ces éléments
    inputElements.forEach(function(element) {
        // Obtenez la clé de traduction du placeholder à partir de l'attribut data-placeholder-lang
        var key = element.getAttribute('data-placeholder-lang');

        // Obtenez le placeholder traduit en fonction de la clé et de la langue
        var translatedPlaceholder = getTranslation(key, language);

        // Modifiez le placeholder de l'élément
        element.setAttribute('placeholder', translatedPlaceholder);
    });
}

// Appelez la fonction pour traduire les placeholders lorsque la page se charge initialement
document.addEventListener('DOMContentLoaded', function() {
    changeLanguage('fr'); // Traduction initiale en français
    translatePlaceholders('fr');
});

// Ajoutez des écouteurs d'événements pour changer la langue
document.querySelector('.english-flag').addEventListener('click', function(event) {
    changeLanguage('en');
    translatePlaceholders('en');
});

document.querySelector('.flag-link').addEventListener('click', function(event) {
    changeLanguage('fr');
    translatePlaceholders('fr');
});

document.querySelector('.dropdown-menu .flag-link').addEventListener('click', function(event) {
    changeLanguage('fr');
    translatePlaceholders('fr');
});
