<?php
if (isset($_GET["mensaje"])) {

$mensaje = ($_GET["mensaje"]);

$respuestas = array(
   "" => "Lo siento, no entiendo tu pregunta.",
   "¿cuanto es 2+2?" => "6, ahhhh no perdon era 4",
   "hola" => "¡Hola! ¿En qué puedo ayudarte?",
   "¿como estas?" => "Estoy bien, gracias.",
   "¿que hago aca?" => "no lo se tu dime.",
   "¿que hago aqui?" => "no lo se tu dime.",
   "¿cual es tu nombre?" => "No tengo un nombre en particular, simplemente puedes llamarme Chatbot.",
   "¿como te llamas?" => "No tengo un nombre en particular, simplemente puedes llamarme Chatbot.",
   "¿en que lenguaje de programacion estas hecho?" => "Estoy programado en PHP.",
   "¿como te hicieron?" => "Estoy programado en PHP.",
   "¿que es un chatbot?" => "Un chatbot es un programa de computadora que puede mantener una conversación con un humano.",
   "¿que eres?" => "Soy un chatbot un programa de computadora que puede mantener una conversación con un usuario humano.",
   "¿puedes contarme un chiste?" => "¡Claro! Aquí tienes uno: ¿Por qué los programadores odian la naturaleza? Porque tiene demasiados errores.",
   "¿que opinas sobre la inteligencia artificial?"  =>  "La inteligencia artificial es una tecnología fascinante que está transformando muchas industrias y aspectos de la vida cotidiana.",
   "¿Cómo puedo mejorar mis habilidades de programación?" =>  "Para mejorar tus habilidades de programación, te recomendaría practicar regularmente, estudiar documentación y tutoriales, y participar en proyectos prácticos. Además, aprender de otros programadores y resolver problemas reales es muy útil.",
   "adios" => "¡Hasta luego! Si tienes más preguntas, no dudes en preguntar.",
);
}
$respuesta = isset($respuestas[$mensaje]) ? $respuestas[$mensaje] : "no entiendo tu pregunta";

   echo $respuesta;

?>