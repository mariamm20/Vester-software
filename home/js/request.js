let countSpan = document.querySelector(".count span");
let bulletsContainer = document.querySelector(".bullets .spans")
let questionArea = document.querySelector(".quiz-area");
let answerArea = document.querySelector(".answers-area");
let submitButton = document.querySelector(".next-button");
let result = document.querySelector(".results");
let info = document.querySelector(".quiz-info");
let cost = document.querySelector(".results .span");
let requestButton = document.querySelector("#req");
let prevButton =document.querySelector(".prev-button");


let arr = [];
let currentIndex = 0;
let price = 0;

function getQuestions() {
    let Request = new XMLHttpRequest;

    Request.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            let questionsObject = JSON.parse(this.responseText);
            let questionsCount = questionsObject.length;


            // create bullets and count
            createBullets(questionsCount);

            // Add data
            addQuestionData(questionsObject[currentIndex], questionsCount);

            prevButton.onclick = () => {
                currentIndex--;
                prevAnswer(questionsObject[currentIndex], questionsCount);
                questionArea.innerHTML = '';
                answerArea.innerHTML = '';
                addQuestionData(questionsObject[currentIndex], questionsCount);
                
                showResults(questionsCount);
            }

            submitButton.onclick = () => {
                checkAnswer(questionsObject[currentIndex], questionsCount);
                currentIndex++;
                
                
                questionArea.innerHTML = '';
                answerArea.innerHTML = '';

                addQuestionData(questionsObject[currentIndex], questionsCount);
                
                showResults(questionsCount);
                
                
                
            }

        }
    }
    Request.open("get", "js/data.json", true);
    Request.send();
}


getQuestions();

function createBullets(num) {
    countSpan.innerHTML = price;
}

function addQuestionData(obj, count) {
    if (currentIndex < count) {

        let counter = document.createElement("p");
        counter.className="counter";
        counter.innerHTML=`${currentIndex + 1} / ${count}`;
        let question = document.createElement("h2");

        let questionText = document.createTextNode(obj['title']);
        
        question.appendChild(questionText);
        questionArea.appendChild(counter);
        questionArea.appendChild(question);
        if (currentIndex === 1 || currentIndex === 2 || currentIndex === 3){
            for (let i = 1; i <= 3; i++) {
                let mainDiv = document.createElement("div");
                mainDiv.className = "answer";
                let input = document.createElement("input");
                input.type = "checkbox";
                input.id = `answer_${i}`;
                input.name = "question";
                input.dataset.answer = obj[`answer_${i}`];

                let label = document.createElement("label");
                label.htmlFor = `answer_${i}`;
                let labelText = document.createTextNode(obj[`answer_${i}`]);
                label.appendChild(labelText);

                if (i == 1) {
                    input.checked = true;
                }


                mainDiv.appendChild(input);
                mainDiv.appendChild(label);

                answerArea.appendChild(mainDiv);
            }
        }
        else {
            for (let i = 1; i <= 3; i++) {
                let mainDiv = document.createElement("div");
                mainDiv.className = "answer";
                let input = document.createElement("input");
                input.type = "radio";
                input.id = `answer_${i}`;
                input.name = "question";
                input.dataset.answer = obj[`answer_${i}`];

                let label = document.createElement("label");
                label.htmlFor = `answer_${i}`;
                let labelText = document.createTextNode(obj[`answer_${i}`]);
                label.appendChild(labelText);

                if (i == 1) {
                    input.checked = true;
                }


                mainDiv.appendChild(input);
                mainDiv.appendChild(label);

                answerArea.appendChild(mainDiv);
            }
        }
        
    }
}

function checkAnswer(obj, count) {
    if (currentIndex < count) {
        let answers = document.getElementsByName("question");
        let theChosenAnswer;

        for (let i = 0; i < answers.length; i++) {

            if (answers[i].checked) {
                theChosenAnswer = answers[i].dataset.answer;
                
                price += obj[`price_${i + 1}`];
                countSpan.innerHTML = price;
                arr.push(theChosenAnswer);
            }
            

        }
    }
}
function prevAnswer(obj, count) {
    if (currentIndex < count) {
        let answers = document.getElementsByName("question");
        let theChosenAnswer;

        for (let i = 0; i < 3; i++) {

            if (answers[i].checked) {
                theChosenAnswer = answers[i].dataset.answer;

                arr.pop();

                price -= obj[`price_${i + 1}`];
                countSpan.innerHTML = price;
            }

        }
    }
}




function showResults(count) {
    if (currentIndex === count) {
        questionArea.remove();
        answerArea.remove();
        submitButton.remove();
        prevButton.remove();
        requestButton.style.display="block";
        

        
    }
};



function TurnFireworksOn() {
    $('.land').fireworks();
   
}


function TurnFireworksOff(){
    $('.land').fireworks('destroy');
}
$('.submit-button').click(function () {
    console.log(arr);

})