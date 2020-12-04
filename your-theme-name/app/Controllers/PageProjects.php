<?php
namespace App\controllers;
use Sober\Controller\Controller;

class PageProjects extends Controller
{
    public function projects()
    {
        $args = [
            'posts_per_page' => -1, 
            'offset' => 0,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'projects'
            ];   
            
            $the_query = new \WP_Query($args);
            $projects = [];

            if ($the_query->post_count >0)
            {
                $projects = array_map(function($projects){
                    $image = get_field('project_image', $projects);
                
                  $url = $image['url'];
                  $title = $image['title'];
                  $alt =$image['alt'];
                  $caption = $image['caption'];

                  $size ='medium';
                  $thumb = $image['sizes'][$size];
                  $width =$image['sizes'][$size. '-width'];
                  $height =$image['sizes'][$size. '-height'];
                  
                  $name = get_field('name', $projects);
                  return (object)[
                      'url' => $url,
                      'title' => $title,
                      'alt' => $alt,
                      'caption' => $caption,
                      'thumb' => $thumb,
                      'width' => $width,
                      'height' => $height,
                      'name' => $name

                      

                  ];

                }, $the_query->posts);
                wp_reset_postdata();
            } 
            return $projects;
    }
}