<x-layout title="Crea Articolo">
      <div class="row">


<div class="col-lg-6 mx-auto">

<a href="{{ route('articles.index') }}" class="small text-secondary">Indietro</a>

<h1>Crea Articolo</h1>



<!-- 
          @if($errors->any())

                    <ul class="alert alert-danger">

                    @foreach($errors->all()  as $error)
                    <li>{{$error}}</li>
                    </ul>
                    @endforeach
          @endif -->



     <div class="mt-5">


<form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
@csrf
           <div class="row g-3">

            
       <div class="col-12">

           <label for="title">Titolo</label>
           <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title')}}">
           @error('title') <p class="text-danger small fw-bold">{{$message}}</p> @enderror
        </div>

        <div class="col-12">
                     <label for="category">Categoria</label>
                     <select name="category" id="category" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach
                     </select>
                     @error('category') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
      </div>
       


           <div class="col-12">
           
           <label for="description">Descrizione</label>
           <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="5">{{ old('description')}}</textarea>
           @error('description') <p class="text-danger small fw-bold">{{$message}}</p> @enderror
        
           </div>




           <div class="col-12">
           
           <label for="body">Body</label>
           <input type="text" name="body" id="body" class="form-control" value="{{ old('body')}}">
           @error('body') <p class="text-danger small fw-bold" >{{$message}}</p> @enderror
        
           </div>


           
        <div class="col-12">
           
           <label for="image">Immagine</label>
           <input type="file" name="image" id="image" class="form-control @error('category') is-invalid @enderror">
           @error('image') <p class="text-danger small fw-bold">{{$message}}</p> @enderror
        
           </div>


 <div class="col-12">

 <button type="submit" class="btn btn-primary"> Crea </button>
 </div>

            </div>


</form>

     </div>





</div>
           




       </div>

</x-layout>