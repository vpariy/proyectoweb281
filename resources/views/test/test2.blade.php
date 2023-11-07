@extends('template.nologeado')

@section('contenido')


<style>
#contenedor {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
    background: #fff;

}



.app {
    background: #9EDDFF;
    width: 90%;
    max-width: 600px;
    margin: 100px auto 0;
    border-radius: 10px;
    padding: 30px;
}

.app h1 {
    font-weight: 25px;
    color: #001e4d;
    font-weight: 600;
    border-bottom: 1px solid #333;
    padding-bottom: 30px;
}

.quiz {
    padding: 20px 0;
}

.quiz h2 {
    font-size: 18px;
    color: #001e4d;
    font-weight: 600;
}

.btn {
    background: #fff;
    color: #222;
    font-weight: 500;
    width: 100%;
    border: 1px solid #222;
    padding: 10px;
    margin: 10px 0;
    text-align: left;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.3s;
}

.btn:hover {
    background: #222;
    color: #fff;
}

/* .btn:active {
    background-color: #008CBA; 
    box-shadow: 0 5px #666;
    transform: translateY(4px);
} */

#next-btn {
    background: #6499E9;
    color: #fff;
    font-weight: 500;
    width: 150px;
    border: 0;
    padding: 10px;
    margin: 20px auto 0;
    
    border-radius: 4px;
    cursor: pointer;
    display: block;
}

.correct {
    background: #9aeabc;
}

.incorrect {
    background: #fff;
}


        
</style>

<div id="contenedor">

<div id="pregunta-contenedor" class="app">
    <h1>Cuestionario</h1>
    <div class="quiz">
        <h2 id="question">La pregunta va aqui</h2>
        <div id="answer-buttons">
            <button id="nunca-button" class="btn">Nunca</button>
            <button id="aveces-button" class="btn">En ocasiones</button>
            <button id="siempre-button" class="btn">Casi siempre</button>
        </div>
        <button id="next-btn">Siguiente</button>
    </div>

</div>

</div>

<script >
  const questions = [
    "¿Te culpa pos sis cambios de ànimo, malestares, o frustaciones propias?",
    "¿Te amenaza o chantajea?",
    "¿Te grita, se burla de ti, te humilla?",
    "¿Desestima tus opiniones y te critica?",
    "¿Controla tu forma de vestir?",
    "¿Te prohíbe decidir sobre tu dinero y tus bienes?",
    "¿Controla tu hora de salida, de llegada, o uso del tiempo en general?",
    "¿Te obliga a mantener su relación en clandestinidad?",
    "¿Tu relación de pareja te ha llevado a ser destructiva?",
    "¿Tu pareja se irrita si le dices que fuma. o bebe demasiado?",
    "¿Te empuja, te golpea o te pellisca?",
    "¿Evitas tocar ciertos temas o hacer ciertas cosas por temor a la reaccion de tu pareja?",
    "¿Sientes culpa o responsabilidad por las reacciones violentas de quien te agrede?",
    "¿Tienes conocimiento si tu pareja a violentado a parejas anteriores?",
    "¿Tu pareja es excesivamente celosa y posesiva?",
    "¿Te has aislado de tu familia, amigas y amigos?",
    "¿Crees que con tu sacrificio tu pareja puede cambiar?",
    "¿Crees que tu pareja tiene la razon en sus criticas, quejas o reclamos contra ti?",
    "¿Tienes relaciones sexuales sin tu consentimiento?",
    "¿Te amenaza con quitarte a tus hijos o tus bienes si terminas la realacion o denuncias?",
    "¿Ha vuelto a agredirte despues de haber prometido que no lo vuelve a hacer?",
    "¿Tienes miedo a tu pareja?",
    "¿Te amenaza con hacerte daño o dañar a tu familia si terminas la relación?",
    "¿Te ha quitado tus bienes?",
    "¿Te amenaza con hacerse daño o suicidarse si se acaba la relación?",
    "¿Tu pareja te dice que no podría arreglártelas sin él/ella?",
    "¿ha vuelto a agredirte después de haberte prometido que no lo vuelve hacer?",
    "¿Estás deprimida y con problema de salud, o has tenido pensamientos suicidas?",
    "¿Has necesitado asistencia médica como resultado de la violencia?",
    "¿Te obliga a tener relaciones sexuales? (Esto es un delito de violación)?",
    "¿Las reacciones de violencia son impredecibles y más recurrentes?",
    "¿Sientes que nadie te puede ayudar o no consideras que mereces ayuda?",
    "¿Auque temes por tu vida sientes que no hay cómo salir de la violencia?",
];

const preguntaContenedor = document.getElementById("pregunta-contenedor")

const questionElement = document.getElementById("question");
const answerButton = document.getElementById("answer-buutons");
const nextButton = document.getElementById("next-btn");

const nuncaButton = document.getElementById("nunca-button");
const avecesButton = document.getElementById("aveces-button");
const siempreButton = document.getElementById("siempre-button");
nuncaButton.dataset.puntos = 1;
avecesButton.dataset.puntos = 2;
siempreButton.dataset.puntos = 3;




let currentQuestionIndex = 0;
let score = 0;

let bajo = 0;
let medio = 0;
let alto = 0;

let puntoActual = 0;

function startQuiz() {
    
    
    nextButton.innerHTML = "Siguiente pregunta";
    nextButton.style.display = 'none';
    showQuestion();

}

function showQuestion() {
    //OBTENEMOS LAS PREGUNTA DEL ARRAY questions Y LO PONEMOS EN UN ELEMENTO DEL DOOM
    let currentQuestion = questions[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML = questionNo + ". " + currentQuestion;

    
    
    nuncaButton.addEventListener("click", selectAnswer);
    avecesButton.addEventListener("click", selectAnswer);
    siempreButton.addEventListener("click", selectAnswer);

}

function selectAnswer(e){
    nuncaButton.classList.remove("correct");
    avecesButton.classList.remove("correct");
    siempreButton.classList.remove("correct");
    
    const selectBtn = e.target;


    selectBtn.classList.add("correct");
    

    
    nextButton.style.display = 'block';
    puntoActual = parseInt(selectBtn.dataset.puntos)
    
    nextButton.addEventListener("click", siguientePregunta)
    
    

}

function siguientePregunta() {
    borrarColor();

    console.log(puntoActual);
    currentQuestionIndex++;
    score = score + puntoActual

    console.log(score);

    if (currentQuestionIndex < 10) {
        bajo = bajo + puntoActual;
        startQuiz();
    } else if(currentQuestionIndex > 9 && currentQuestionIndex <= 20) {
        medio = medio + puntoActual;
        startQuiz();
    } else if(currentQuestionIndex >= 21 && currentQuestionIndex <= 32) {
        alto = alto + puntoActual;
        startQuiz();
    } else {
        evaluacion();
    }
    
    //startQuiz()
}

function evaluacion() {
    preguntaContenedor.style.display == "none";

    console.log(bajo + "  "+ medio + "  " + alto);
    if(bajo > medio) {
        if (bajo > alto) {
            alert("El riesgo es bajo  ESTO TAMBIEN ES VIOLENCIA ¡DESPIERTA!");
        } else {
            alert("El riesgo es alto  ¡DENUNCIA! ¡ESTAS EN PELIGRO!");
        }
    } else { 
        if(medio > alto) {
            alert("El riesgo es medio ¡BUSCA AYUDA! ESTO NO ES TU CULPA")
        } else {
            alert("El riesgo es alto  ¡DENUNCIA! ¡ESTAS EN PELIGRO!")
        }
    }
    
    console.log("hola munot")

}


function borrarColor() {
    nuncaButton.classList.remove("correct");
    avecesButton.classList.remove("correct");
    siempreButton.classList.remove("correct");
}



startQuiz();  

</script>




@endsection