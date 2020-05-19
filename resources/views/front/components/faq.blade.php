<div class="faq__question accordion-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#{{$faq->slug}}">
    <a href="#" class="title title--bold">{{$faq->title}} <span class="icon icon--caret-down"></span></a>
</div>

<div id="{{$faq->slug}}" class="faq__answer panel-collapse collapse" style="height: 0px;">
   <div class=" text editable">

      <p>{{ strip_tags($faq->body, '<strong><em><u>') }}</p>
   </div>
</div>
