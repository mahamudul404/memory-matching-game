const cardsArray = [
  "🍎",
  "🍌",
  "🍓",
  "🍇",
  "🍒",
  "🍍",
  "🥭",
  "🍉",
  "🍎",
  "🍌",
  "🍓",
  "🍇",
  "🍒",
  "🍍",
  "🥭",
  "🍉",
];

let firstCard = null;
let secondCard = null;
let moves = 0;
let matches = 0;

const gameBoard = document.getElementById("game-board");
const movesDisplay = document.getElementById("moves");
const matchesDisplay = document.getElementById("matches");

// Shuffle the cards array
function shuffle(array) {
  for (let i = array.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [array[i], array[j]] = [array[j], array[i]];
  }
}

function createBoard() {
  shuffle(cardsArray);
  cardsArray.forEach((symbol, index) => {
    const card = document.createElement("div");
    card.classList.add("card");
    card.dataset.symbol = symbol;
    card.innerHTML = "?";
    card.addEventListener("click", () => flipCard(card));
    gameBoard.appendChild(card);
  });
}

function flipCard(card) {
  if (firstCard && secondCard) return;

  card.classList.add("flipped");
  card.innerHTML = card.dataset.symbol;

  if (!firstCard) {
    firstCard = card;
  } else {
    secondCard = card;
    moves++;
    movesDisplay.innerText = moves;
    checkMatch();
  }
}

function checkMatch() {
  if (firstCard.dataset.symbol === secondCard.dataset.symbol) {
    firstCard.classList.add("matched");
    secondCard.classList.add("matched");
    firstCard = null;
    secondCard = null;
    matches++;
    matchesDisplay.innerText = matches;

    if (matches === cardsArray.length / 2) {
      setTimeout(() => alert("You won!"), 500);
    }
  } else {
    setTimeout(() => {
      firstCard.classList.remove("flipped");
      secondCard.classList.remove("flipped");
      firstCard.innerHTML = "?";
      secondCard.innerHTML = "?";
      firstCard = null;
      secondCard = null;
    }, 1000);
  }
}

createBoard();
