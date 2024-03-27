<x-layout>
    <div class="row">
        <div class="col-lg-6 mx-auto">
    <h1> contatti</h1>

<p class="lead text-muted"> Per info compila il forum sottostante e sarai contattato al più presto.</p>
<form action="{{route('contatti.send')}}" method="POST">
@csrf
<div class="row g-3">
    <div class="col-12">
  <label for="email">email</label>
  <input type="email" name="email" id="email" class="form-control">


  <div class="col-12">
  <label for="message">messaggio</label>
  <textarea name="message" id="message" rows="5" class="form-control"></textarea>
</div>
<div class="col-12">
<button class="btn btn-primary" type="submit">Invia</button>

</div>
</div>

</form>

</div>


</div>

 </x-layout>