<div>
  <h1>welcome to another blade page</h1>

  {{-- {{$title}} <br> --}}
 <h2>count of users= {{count($users)}}</h2>  <br>

  <button wire:click="createusers">create new users</button>
  <hr>

  <h1>hello world</h1>

  <form wire:submit="createusers" action="">
        <input wire:model="name" type="text" placeholder="name">

        <input wire:model="email" type="text" placeholder="email">

        <input wire:model="password" type="text" placeholder="password">  <br> <br> <br>

        <button>create users</button>
  </form>

  <hr>
  @foreach ($users as $user )
      <h2>{{$user->name}}</h2>
  @endforeach
</div>


