<?php


namespace App\Services;

class  projectService {

    private $projects = [
        [
            'id' => 1,
            'title' => 'Booking Platform',
            'image' => 'images/book.png',
            'description' =>'Website that allows customers to book sports fields and event halls, with admin management.',
            'technologies' => ['HTML' , 'CSS' , 'PHP' , 'SQL'],
            'github' => 'https://github.com/Adnane-x87/projet-fin-etude-booking.git',
        ],
        [
             'id' => 2,
            'title' => 'E-commerce project',
            'image' => 'images/ecommers.png',
            'description' =>'E-commerce landing page showcasing a brand-s products and attracting visitors.',
            'technologies' => ['HTML' , 'Bootstrap' ],
            'github' => 'https://github.com/Adnane-x87/E-commerce-project.git',
        ],
        [
             'id' => 3,
            'title' => 'Kids Platform',
            'image' => 'images/learn.png',
            'description' =>'An interactive educational project for children, helping them learn numbers, letters, and animal names through engaging audio content. It enhances recognition skills.',
            'technologies' => ['HTML' , 'CSS' , 'JavaScrpit'],
            'github' =>  'https://github.com/Adnane-x87/kiddoLearn.git',
        ],
    ];

    public function getAll(){
        return $this ->projects;
    }

    public function getById($id){
        return collect($this->projects)->firstwhere('id',$id);
    }
}