<div class="nav">
  {{-- <img src="img/logo.png" alt=""> --}}
  <ul>
    @foreach ($nav as $elenco)
      <li>
        @switch($elenco)
          @case('Instagram')
            <a href="https://www.instagram.com/umbertodelpiano__/">{{$elenco}}</a>
            @break
          @case('Facebook')
            <a href="https://www.facebook.com/umbertodelpianoph">{{$elenco}}</a>
            @break
        @endswitch
      </li>
    @endforeach
  </ul>
</div>
