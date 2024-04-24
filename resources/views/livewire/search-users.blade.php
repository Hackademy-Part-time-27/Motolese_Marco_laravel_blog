<div>

   <div class="row">


     <div class="col-12">

         <input type="text" class="form-control" placeholder="cerca utente" wire:model.live="search">
         {{$search}}

     </div>



     <div class="col-12">
          <h5>Elenco utenti </h5>

          <ul> @foreach($users as $user) </ul>
           
            <li> {{$user->name}}    {{$user->email}}</li>
        
            @endforeach

     </div>



   </div>
</div>
