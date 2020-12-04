<?php

namespace App\controllers;

use Sober\Controller\Controller;



class SingleProjects extends Controller
{
    public function project()
    {
        return (object)[
            'name' => get_field('name', get_the_ID()),
            'url' => get_field('url', get_the_ID()),
            'case_study' => get_field('case_study', get_the_ID()),
            'delivery_solution' => get_field('delivery_solution', get_the_ID()),
            'feedback' => get_field('feedback', get_the_ID()),
            'img' => $this->getImage(get_the_ID(),)

        ];
    }


    protected function getImage($id, $size='medium')
    {

        $image = get_field('project_image', $project);
                
        $url = $image['url'];
        $title = $image['title'];
        $alt =$image['alt'];
        $caption = $image['caption'];


        $thumb = $image['sizes'][$size];
        $width =$image['sizes'][$size. '-width'];
        $height =$image['sizes'][$size. '-height'];

        return (object)[
            'url' => $url,
                      'title' => $title,
                      'alt' => $alt,
                      'caption' => $caption,
                      'thumb' => $thumb,
                      'width' => $width,
                      'height' => $height,
        ];
    }
}