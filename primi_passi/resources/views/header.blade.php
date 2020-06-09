<div class="nav">
  <ul>
    @foreach ($nav as $elenco)
      <li>
        @switch($elenco)
          @case('Home')
            <a href="https://www.delpianoelettrico.com/shop/it/">{{$elenco}}</a>
            @break
          @case('Chi siamo')
            <a href="https://www.delpianoelettrico.com/shop/it/content/4-chi-siamo">{{$elenco}}</a>
            @break
          @case('Contattaci')
            <a href="https://www.delpianoelettrico.com/shop/it/contattaci">{{$elenco}}</a>
            @break
          @case('Blog')
            <a href="https://www.delpianoelettrico.com/blog/">{{$elenco}}</a>
            @break
        @endswitch
      </li>
    @endforeach
  </ul>
</div>
