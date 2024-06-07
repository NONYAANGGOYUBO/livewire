<div>
  <h1>welcome to another blade page</h1>

  {{-- {{$title}} <br> --}}
 <h2>count of users= {{count($users)}}</h2>  <br>

  <button wire:click="createusers">create new users</button>
  <hr>

  <h1>hello world</h1>



  <form wire:submit="createusers" action="">
        <input wire:model="name" type="text" placeholder="name">

        @error('name')
            <span class="text-red-500 text-xs">{{$message}}</span>
        @enderror<br><br>

        <input wire:model="email" type="text" placeholder="email">

        @error('email')
        <span class="text-red-500 text-xs">{{$message}}</span>
        @enderror<br><br>

        <input wire:model="password" type="text" placeholder="password">

        @error('password')
        <span class="text-red-500 text-xs">{{$message}}</span>
        @enderror <br> <br> <br>

        <button>create users</button> <br><br>
        @if(session('messagevariable'))
        <span>{{session('messagevariable')}}</span>
    @endif
  </form>

  <hr>
  @foreach ($users as $user )
      <h2>{{$user->name}}</h2>
  @endforeach

  <!-- sdfhjksdhfshdfjdhgdf -->
    {{$users->links()}}

</div>






