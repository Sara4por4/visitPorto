<div class="schedule">
  <div class="schedule__header">
    <h4 class="small-text small-text--bold small-text--caps">{{ $season }}</h4>
    <p class="tiny-text tiny-text--medium">{{ $months }}</p>
  </div>
  <div class="schedule__content">
    <p class="tiny-text tiny-text--medium">Segunda a Sábado</p>
    <p class="text">{{ $week }}</p>
  </div>
  <div class="schedule__content">
    <p class="tiny-text tiny-text--medium">Domingos</p>
    <p class="text">{{ $sunday }}</p>
  </div>
  <div class="schedule__content">
    <p class="tiny-text tiny-text--medium">Feriados</p>
    <p class="text">{{ $holiday }}</p>
  </div>
</div>
