<article @php post_class() @endphp>
  <header class="mb-5 pb-8 border-b">
    <h1 class="entry-title">{!! $project->name !!}</h1>
    <a href="#">{{ $project->url }}</a>

  </header>
  <div class="entry-content leading-normal">
    <section >
      <img class="img-fluid " src="{{ $project->img->url }}" alt="{{ $project->img->alt }}">
    
    </section>

    <section>
      <h2 class="mb-5 pb-8 border-b">Case Study</h2>
      {!! $project->case_study !!}
    </section>

    <section>
      <h2 class="mb-5 pb-8 border-b">Solution</h2>
      {!! $project->delivery_solution !!}
    </section>

    <section>
      <h2 class="mb-5 pb-8">FeedBack</h2>
      {!! $project->feedback !!}
    </section>

  </div>
  

</article>
