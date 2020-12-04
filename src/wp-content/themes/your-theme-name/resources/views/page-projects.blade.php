@extends('layouts.app')
@section('content')

<section class="py-5 font-sans min-h-screen -mb-10 leading0-normal">
                        <h2 class="text-4xl mb-4">{{ $post->post_title }}</h2>
                        {!! $post->post_content !!}
        
  
        <div class="row text-center container">
                @foreach($projects as $project)
                        <div class="col-xs-12 col-sm-6 col-md-4 ">
                                <a href="{{ $project->permalink }}" class="text-black no-underline">
                                <img src="{{ $project->thumb }}" alt="{{ $project->alt }}" title="{{ $project->title }}">
                                <p class="">{{ $project->name }}</p>
                                </a>
                        </div>

                @endforeach
                
        </div>          
                
       
</section>  
          
@endsection