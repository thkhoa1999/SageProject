@extends('layouts.app')
@section('content')
@while (have_posts()) @php the_post() @endphp
        <section class="py-5 font-sans min-h-screen -mb-10 leading0-normal">
                        <h2 class="text-4xl mb-4">{{the_title()}}</h2>
                        {!! the_content()!!}
        
  @php
    $args = [
        'posts_per_page' => -1, 
        'offset' => 0,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'projects'
        ];   
        
        $the_query = new \WP_Query($args)
        

  @endphp
    <div class="flex">
        @while ($the_query->have_posts()) @php $the_query->the_post() @endphp
                @php
                
                  $image = get_field('project_image');
                
                  $url = $image['url'];
                  $title = $image['title'];
                  $alt =$image['alt'];
                  $caption = $image['caption'];

                  $size ='medium';
                  $thumb = $image['sizes'][$size];
                  $width =$image['sizes'][$size. '-width'];
                  $height =$image['sizes'][$size. '-height'];
                  
                  $name = get_field('name');



                @endphp
                

                   <div class="w-1/2">
                        <img src="{{ $thumb }}" alt="">
                   </div>
                   
                   


        @endwhile
        </div>
        @php
                wp_reset_postdata();
        @endphp
@endwhile
        </section>      
@endsection