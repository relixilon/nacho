<section id="preguntas">
  <ul class="questions" />
  <?php foreach ($data->children()->listed()as $question):?>
  <li class="question">
    <span class="question-header"><?=$question->pregunta()?></span>
    <span class="question-answer">
      <p><?=$question->respuesta()?>
    </span></p>
  </li>
  <?php endforeach?>
  </ul>
</section>