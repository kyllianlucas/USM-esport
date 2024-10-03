// scripts.js

document.getElementById('ajoutForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Récupérer les valeurs des champs de saisie
    const nomEquipe = document.getElementById('nomEquipe').value;
    const joueurs = document.getElementById('joueurs').value.split(',').map(joueur => joueur.trim());

    // Créer les éléments nécessaires pour une nouvelle équipe
    const equipeDiv = document.createElement('div');
    equipeDiv.className = 'equipe';
    
    const h3 = document.createElement('h3');
    h3.textContent = nomEquipe;
    equipeDiv.appendChild(h3);
    
    const p = document.createElement('p');
    p.innerHTML = 'Joueurs: <br>' + joueurs.map(joueur => '- ' + joueur).join('<br>');
    equipeDiv.appendChild(p);

    const button = document.createElement('button');
    button.textContent = 'Supprimer';
    button.onclick = function() {
        removeEquipe(button);
    };
    equipeDiv.appendChild(button);

    // Ajouter la nouvelle équipe à la section des équipes
    document.getElementById('equipes').appendChild(equipeDiv);

    // Réinitialiser le formulaire
    document.getElementById('ajoutForm').reset();
});

function removeEquipe(button) {
    // Supprimer l'équipe parente du bouton de suppression
    button.parentElement.remove();
}

// scripts.js

document.addEventListener("DOMContentLoaded", function() {
    const teams = Array.from({ length: 64 }, (_, i) => `Équipe ${i + 1}`);

    function generateBracket(teams) {
        const bracketContainer = document.getElementById('tournament-bracket');

        // Function to create a round in the bracket
        function createRound(matches) {
            const round = document.createElement('div');
            round.classList.add('bracket-round');

            matches.forEach(match => {
                const matchup = document.createElement('div');
                matchup.classList.add('matchup');

                const team1 = document.createElement('div');
                team1.classList.add('team');
                team1.textContent = match[0];

                const team2 = document.createElement('div');
                team2.classList.add('team');
                team2.textContent = match[1];

                matchup.appendChild(team1);
                matchup.appendChild(team2);
                round.appendChild(matchup);
            });

            return round;
        }

        // Initial round
        let currentRoundTeams = teams;
        while (currentRoundTeams.length > 1) {
            const matches = [];
            for (let i = 0; i < currentRoundTeams.length; i += 2) {
                matches.push([currentRoundTeams[i], currentRoundTeams[i + 1]]);
            }
            const round = createRound(matches);
            bracketContainer.appendChild(round);

            // Move to the next round
            currentRoundTeams = matches.map(match => match[0]); // Simplified: Winner is always the first team
        }
    }

    generateBracket(teams);
});


document.addEventListener("DOMContentLoaded", function() {
    const teams = Array.from({ length: 64 }, (_, i) => ({
        name: `Équipe ${i + 1}`,
        logo: 'https://via.placeholder.com/80', // Remplacez par le chemin de votre logo
        players: [
            `Joueur ${i * 3 + 1}`,
            `Joueur ${i * 3 + 2}`,
            `Joueur ${i * 3 + 3}`
        ]
    }));

    function createTeamCard(team) {
        const card = document.createElement('div');
        card.classList.add('team-card');

        const cardInner = document.createElement('div');
        cardInner.classList.add('team-card-inner');

        const cardFront = document.createElement('div');
        cardFront.classList.add('team-card-front');

        const logo = document.createElement('img');
        logo.classList.add('team-logo');
        logo.src = team.logo;
        logo.alt = team.name;

        const teamName = document.createElement('div');
        teamName.textContent = team.name;

        cardFront.appendChild(logo);
        cardFront.appendChild(teamName);

        const cardBack = document.createElement('div');
        cardBack.classList.add('team-card-back');

        team.players.forEach(player => {
            const playerName = document.createElement('div');
            playerName.textContent = player;
            cardBack.appendChild(playerName);
        });

        cardInner.appendChild(cardFront);
        cardInner.appendChild(cardBack);
        card.appendChild(cardInner);

        return card;
    }

    const teamsContainer = document.getElementById('teams-container');
    teams.forEach(team => {
        const teamCard = createTeamCard(team);
        teamsContainer.appendChild(teamCard);
    });
});

// scripts.js

document.addEventListener("DOMContentLoaded", function() {
    const teamsContainer = document.getElementById('teams-container');
    const addTeamForm = document.getElementById('add-team-form');

    // Équipes initiales
    const teams = [];

    function createTeamCard(team, index) {
        const card = document.createElement('div');
        card.classList.add('team-card');

        const cardInner = document.createElement('div');
        cardInner.classList.add('team-card-inner');

        const cardFront = document.createElement('div');
        cardFront.classList.add('team-card-front');

        const logo = document.createElement('img');
        logo.classList.add('team-logo');
        logo.src = team.logo;
        logo.alt = team.name;

        const teamName = document.createElement('div');
        teamName.textContent = team.name;

        cardFront.appendChild(logo);
        cardFront.appendChild(teamName);

        const cardBack = document.createElement('div');
        cardBack.classList.add('team-card-back');

        team.players.forEach(player => {
            const playerName = document.createElement('div');
            playerName.textContent = player;
            cardBack.appendChild(playerName);
        });

        const deleteButton = document.createElement('button');
        deleteButton.classList.add('delete-button');
        deleteButton.textContent = 'X';
        deleteButton.addEventListener('click', () => {
            deleteTeam(index);
        });

        cardInner.appendChild(cardFront);
        cardInner.appendChild(cardBack);
        card.appendChild(cardInner);
        card.appendChild(deleteButton);

        return card;
    }

    function renderTeams() {
        teamsContainer.innerHTML = '';
        teams.forEach((team, index) => {
            const teamCard = createTeamCard(team, index);
            teamsContainer.appendChild(teamCard);
        });
    }

    function addTeam(event) {
        event.preventDefault();
        const teamName = document.getElementById('team-name').value;
        const teamLogo = document.getElementById('team-logo').value;
        const player1 = document.getElementById('player-1').value;
        const player2 = document.getElementById('player-2').value;
        const player3 = document.getElementById('player-3').value;

        const newTeam = {
            name: teamName,
            logo: teamLogo,
            players: [player1, player2, player3]
        };

        teams.push(newTeam);
        renderTeams();
        addTeamForm.reset();
    }

    function deleteTeam(index) {
        teams.splice(index, 1);
        renderTeams();
    }

    addTeamForm.addEventListener('submit', addTeam);
    renderTeams();
});



document.addEventListener("DOMContentLoaded", function() {
    const countdownDate = new Date("July 15, 2024 00:00:00").getTime(); // Date de la compétition

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = countdownDate - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days").textContent = days;
        document.getElementById("hours").textContent = hours;
        document.getElementById("minutes").textContent = minutes;
        document.getElementById("seconds").textContent = seconds;

        if (distance < 0) {
            clearInterval(countdownInterval);
            document.getElementById("timer").textContent = "La compétition a commencé !";
        }
    }

    const countdownInterval = setInterval(updateCountdown, 1000);
    updateCountdown(); // Mise à jour initiale
});


document.addEventListener("DOMContentLoaded", function() {
    const bracketContainer = document.getElementById('tournaments-bracket');

    const teams = [
        'Équipe 1', 'Équipe 2', 'Équipe 3', 'Équipe 4',
        'Équipe 5', 'Équipe 6', 'Équipe 7', 'Équipe 8'
    ];

    function createBracket(teams) {
        let rounds = Math.ceil(Math.log2(teams.length));
        let bracket = document.createElement('div');
        bracket.classList.add('bracket');

        for (let round = 0; round < rounds; round++) {
            let roundDiv = document.createElement('div');
            roundDiv.classList.add('round');
            bracket.appendChild(roundDiv);

            let matchups = Math.pow(2, rounds - round - 1);
            for (let match = 0; match < matchups; match++) {
                let matchDiv = document.createElement('div');
                matchDiv.classList.add('match');
                roundDiv.appendChild(matchDiv);

                if (round === 0) {
                    let team1 = teams[match * 2] || 'TBD';
                    let team2 = teams[match * 2 + 1] || 'TBD';
                    matchDiv.appendChild(createTeamDiv(team1));
                    matchDiv.appendChild(createTeamDiv(team2));
                } else {
                    matchDiv.appendChild(createTeamDiv('TBD'));
                    matchDiv.appendChild(createTeamDiv('TBD'));
                }
            }
        }
        return bracket;
    }

    function createTeamDiv(team) {
        let teamDiv = document.createElement('div');
        teamDiv.classList.add('team');
        teamDiv.textContent = team;
        return teamDiv;
    }

    let bracket = createBracket(teams);
    bracketContainer.appendChild(bracket);
});
