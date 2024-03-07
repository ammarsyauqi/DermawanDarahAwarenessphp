const quizData = [
    {
        question: '1)\t\tWhat is the main purpose of donating blood?',
        answers: [
            { text: 'a)\t\tTo receive compensation', correct: false },
            { text: 'b)\t\tTo improve personal health', correct: false },
            { text: 'c)\t\tTo help patients in need', correct: true },
            { text: 'd)\t\tTo fulfill a legal requirement', correct: false }
        ],
        imagePath: 'images/q1.png' // Path to the image for question   
    },
    {
        question: '2)\t\tHow often can an average adult donate whole blood?',
        answers: [
            { text: 'a)\t\tEvery 6 months', correct: false },
            { text: 'b)\t\tEvery 8 weeks', correct: true },
            { text: 'c)\t\tEvery 3 months', correct: false },
            { text: 'd)\t\tOnce a year', correct: false }
        ],
        imagePath: 'images/q2.png' 
    },
    {
        question: '3)\t\tWhich blood type is considered the "universal donor"?',
        answers: [
            { text: 'a)\t\tA-positive (A+)', correct: false },
            { text: 'b)\t\tB-positive (B-)', correct: false },
            { text: 'c)\t\tO-negative (O-)', correct: true },
            { text: 'd)\t\tAB-positive (AB+)', correct: false }
        ],
        imagePath: 'images/q3.png' 
    },
    {
        question: '4)\t\tWhat is the fluid that flows in our blood vessels called?',
        answers: [
            { text: 'a)\t\tSerum', correct: false },
            { text: 'b)\t\tLymph', correct: false },
            { text: 'c)\t\tPlasma', correct: true },
            { text: 'd)\t\tHemoglobin', correct: false }
        ],
        imagePath: 'images/q4.png' 
    },
    {
        question: '5)\t\tWhat nutrient is important for maintaining healthy red blood cells?',
        answers: [
            { text: 'a)\t\tVitamin C', correct: false },
            { text: 'b)\t\tCalcium', correct: false },
            { text: 'c)\t\tIron', correct: true },
            { text: 'd)\t\tVitamin D', correct: false }
        ],
        imagePath: 'images/q5.png' 
    },
    {
        question: '6)\t\tWhat is the age requirement for donating blood in many places?',
        answers: [
            { text: 'a)\t\t16 Years old', correct: false },
            { text: 'b)\t\t25 Years old', correct: false },
            { text: 'c)\t\t21 Years old', correct: false },
            { text: 'd)\t\t18 Years old', correct: true }
        ],
        imagePath: 'images/q6.png' 
    },
    {
        question: '7)\t\tWhich organization often hosts blood donation drives?',
        answers: [
            { text: 'a)\t\tWHO (World Health Organization)', correct: false },
            { text: 'b)\t\tRed Cross', correct: true },
            { text: 'c)\t\tUNICEF', correct: false },
            { text: 'd)\t\tDoctors without Borders', correct: false }
        ],
        imagePath: 'images/q7.png' 
    },
    {
        question: '8)\t\tWhat is the liquid part of the blood that remains after clotting called?',
        answers: [
            { text: 'a)\t\tPlasma', correct: false },
            { text: 'b)\t\tLymph', correct: false },
            { text: 'c)\t\tSerum', correct: true },
            { text: 'd)\t\tExtracellular fluid', correct: false }
        ],
        imagePath: 'images/q8.png' 
    },
    {
        question: '9)\t\tWhat do we call the process of separating blood into its different components?',
        answers: [
            { text: 'a)\t\tBlood fractionation', correct: true },
            { text: 'b)\t\tBlood differentiation', correct: false },
            { text: 'c)\t\tBlood subdivision', correct: false },
            { text: 'd)\t\tBlood segregation', correct: false }
        ],
        imagePath: 'images/q9.png' 
    },
    {
        question: '10)\t\tWhat is the approximate volume of blood in an average adult body?',
        answers: [
            { text: 'a)\t\tAround 3 liters', correct: false },
            { text: 'b)\t\tAround 5 liters', correct: true },
            { text: 'c)\t\tAround 7 liters', correct: false },
            { text: 'd)\t\tAround 10 liters', correct: false }
        ],
        imagePath: 'images/q10.png' 
    },
    {
        question: '11)\t\tWhat is the term for the process of voluntarily giving blood for medical use?',
        answers: [
            { text: 'a)\t\tBlood donation', correct: true },
            { text: 'b)\t\tBlood extraction', correct: false },
            { text: 'c)\t\tHematopoiesis', correct: false },
            { text: 'd)\t\tBlood infusion', correct: false }
        ],
        imagePath: 'images/q11.png' 
    },
    {
        question: '12)\t\tWhat part of the blood helps to stop bleeding by forming clots and preventing too much blood from coming out?',
        answers: [
            { text: 'a)\t\tRed blood cells', correct: false },
            { text: 'b)\t\tWhite blood cells', correct: false },
            { text: 'c)\t\tPlatelets', correct: true },
            { text: 'd)\t\tPlasma', correct: false }
        ],
        imagePath: 'images/q12.png' 
    },
    {
        question: '13)\t\tWhat are the common risks of donating blood?',
        answers: [
            { text: 'a)\t\tContract Common Viruses', correct: false },
            { text: 'b)\t\tBacterial Infection', correct: false },
            { text: 'c)\t\tLow blood pressure', correct: true },
            { text: 'd)\t\tNone of the above', correct: false }
        ],
        imagePath: 'images/q13.png' 
    },
    {
        question: '14)\t\tWhich one is considered as the iron-protein in food?',
        answers: [
            { text: 'a)\t\tFish', correct: true },
            { text: 'b)\t\tChicken', correct: false },
            { text: 'c)\t\tCheese', correct: true },
            { text: 'd)\t\tMilk', correct: false }
        ],
        imagePath: 'images/q14.png' 
    },
    {
        question: '15)\t\tWhich of the following individuals is prohibited from donating blood?',
        answers: [
            { text: 'a)\t\tA person currently suffering from cold or flu', correct: true },
            { text: 'b)\t\tA menstruating woman', correct: false },
            { text: 'c)\t\tA pregnant woman', correct: false },
            { text: 'd)\t\tA person whose partner is HIV positive', correct: false }
        ],
        imagePath: 'images/q15.svg' 
    }
];

let currentQuestion = 0;
let score = 0;

const startPage = document.getElementById('start-page');
const quizContainer = document.getElementById('quiz-container');
const startButton = document.getElementById('start-button');
const questionContainer = document.getElementById('question-container');
const answerButtons = document.getElementById('answer-buttons');
const scoreSpan = document.getElementById('score');
const endButtons = document.getElementById('end-buttons');

function startGame() {
    startPage.style.display = 'none';
    quizContainer.style.display = 'block';
    currentQuestion = 0;
    score = 0;
    showQuestion(quizData[currentQuestion]);
}


function showQuestion(question) {
    questionContainer.innerHTML = ''; // Clear existing content

    // Set question text
    const questionText = document.createElement('div');
    questionText.innerText = question.question;
    questionContainer.appendChild(questionText);

    // Add a line break to create a new line
    questionContainer.appendChild(document.createElement('br'));

    // Check if the question has an image path defined
    if (question.imagePath) {
        // Create a container for the image with a border
        const imageContainer = document.createElement('div');
        imageContainer.style.border = '2px solid #ccc'; // Set border style
        imageContainer.style.padding = '10px'; // Add padding for spacing
        imageContainer.style.textAlign = 'center'; // Center the image within the container

        // Add an image to the container
        const image = document.createElement('img');
        image.src = question.imagePath; // Use the provided image path
        image.alt = 'Image for the question'; // Add alt text for accessibility
        image.style.width = '100%'; // Adjust the width as needed
        imageContainer.appendChild(image);

        // Append the image container to the main container
        questionContainer.appendChild(imageContainer);

        // Add a line break after the image
        questionContainer.appendChild(document.createElement('br'));
    }

    answerButtons.innerHTML = ''; // Clear existing answer buttons

    question.answers.forEach(answer => {
        const button = document.createElement('button');
        button.innerText = answer.text;
        button.classList.add('btn');
        button.addEventListener('click', () => selectAnswer(answer, button));
        answerButtons.appendChild(button);
    });
}





function selectAnswer(answer, button) {
    const buttons = answerButtons.getElementsByTagName('button');

    for (const btn of buttons) {
        btn.disabled = true;
    }

    if (answer.correct) {
        score++;        //add score and display green
        document.getElementById('score').innerText = score;
        button.style.backgroundColor = '#4CAF50';
    } else {        //else is red
        button.style.backgroundColor = '#FF5252';
    }

    setTimeout(() => {      //track question and end when question over
        if (currentQuestion < quizData.length - 1) {
            currentQuestion++;
            showQuestion(quizData[currentQuestion]);
        } else {
            endGame();
        }
    }, 1000);
}

function endGame() {
    // Clear existing content in questionContainer
    questionContainer.innerHTML = '';

    // Create a div element to wrap the completion message
    const completionMessage = document.createElement('div');
    completionMessage.innerText = 'Quiz Completed!\n\n\nThis is your score! \tKeep it up!';
    
    // Apply a class to the div for styling purposes if needed
    completionMessage.classList.add('completion-message');

    // Append the completion message to the questionContainer
    questionContainer.appendChild(completionMessage);

    // Clear existing answer buttons
    answerButtons.innerHTML = '';

    // Hide the next button
    document.getElementById('next-button').style.display = 'none';

    // Display the score
    scoreSpan.style.display = 'block';

    // Display the end buttons
    endButtons.style.display = 'flex';
}



function restartQuiz() {
    currentQuestion = 0;
    score = 0;
    scoreSpan.innerText = '0';
    document.getElementById('next-button').style.display = 'block';
    scoreSpan.style.display = 'block';
    endButtons.style.display = 'none';
    startPage.style.display = 'block'; // Show the start page
    quizContainer.style.display = 'none'; // Hide the quiz container
}


function goHome() {
    window.location.href = 'http://localhost/fyp/interactive.php'; // Navigate to index.php

}

function nextQuestion() {
    const buttons = answerButtons.getElementsByTagName('button');
    for (const btn of buttons) {
        btn.disabled = false;
        btn.style.backgroundColor = '#fff';
    }

    if (currentQuestion < quizData.length - 1) {
        currentQuestion++;
        showQuestion(quizData[currentQuestion]);
    } else {
        endGame();
    }
}

// Function to update score on table 'highscore' based on session ID
function updateScores(score) {
    var http = new XMLHttpRequest();
    var url = 'quiz-scoreserver.php'; // Link to PHP server file
    
    // Parameters to be sent in the POST request
    var params = 'quiz_score=' + score;
    
    http.open('POST', url, true);
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    
    http.onreadystatechange = function() {
        if (http.readyState == 4 && http.status == 200) {
            alert(http.responseText); // Alert the response from the server
        }
    }
    
    http.send(params); // Send the POST request with parameters
}


startButton.addEventListener('click', startGame);
