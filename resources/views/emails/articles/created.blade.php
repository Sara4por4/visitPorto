@component('mail::message')
{!! $email->body !!}
<p><strong>Id: </strong>{{$article->id}}</p>
<p><strong>Titulo: </strong>{{$article->title}}</p>
<p><strong>Categoria: </strong>{{$article->getMainCategory()->name}}</p>
<p><strong>Data do artigo: </strong>{{$article->published_at}}</p>
<p><strong>Texto 1: </strong></p>
<p>{!! $article->body !!}</p>
<p><strong>Texto 2: </strong></p>
<p>{!! $article->body2 !!}</p>
@endcomponent
