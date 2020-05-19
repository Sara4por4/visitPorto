@component('mail::message')
{!! $email->body !!}
<p><strong>Nome: </strong>{{$request->name}}</p>
<p><strong>Contacto: </strong>{{$request->contact}}</p>
<p><strong>Email: </strong>{{$request->email}}</p>
<p><strong>Assunto: </strong>{{$request->subject}}</p>
<p><strong>Mensagem: </strong></p>
<p>{{$request->message}}</p>
<p><strong>Aceitou os termos e as politíca de privacidade?</strong>
    @if($request->rgpd && $request->rgpd == true)
        Sim
    @else
        Não
    @endif
</p>
@endcomponent
