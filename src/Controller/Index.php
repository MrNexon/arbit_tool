<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Index extends AbstractController
{
    /**
     * @Route("/worker", name="worker")
     */
    public function view() {
        return $this->render('worker/dashboard.html.twig', [
            'page' => [
                'title' => "Панель арбитражника"
            ],
            'ui' => [
                'user' => [
                    'name' => "Ефим Беляков",
                    'image' => "https://lh3.googleusercontent.com/-Y2-q0LmvSnw/AAAAAAAAAAI/AAAAAAAAAAA/AAKWJJP8lbbYmr0-D42ys4XMOlZWq7_1Fw.CMID/s32-c/photo.jpg"
                ],
                'team_members' => [
                    [
                        'name' => "Егор Будко",
                        'image' => "https://lh3.googleusercontent.com/a-/AOh14GjpuJRtRtY63e5VUQqAr4F63dQ7ezv9Cj0pHFzm=s70-p-k-rw-no",
                        'online' => true
                    ],
                    [
                        'name' => "Ефим Беляков",
                        'image' => "https://lh3.googleusercontent.com/-Y2-q0LmvSnw/AAAAAAAAAAI/AAAAAAAAAAA/AAKWJJP8lbbYmr0-D42ys4XMOlZWq7_1Fw.CMID/s32-c/photo.jpg",
                        'online' => true
                    ],
                    [
                        'name' => "NEO",
                        'image' => "https://lh3.googleusercontent.com/a-/AOh14GjurRfo2vgb9mfI2_7JxANJOowMe0fVKz5L4TICQw=s96-k-no",
                        'online' => false
                    ],
                    [
                        'name' => "Владимир Леншин",
                        'image' => "https://lh3.googleusercontent.com/a-/AOh14GgLXGfDtXyiB-I-dIkVkOd9p7iSTAbAQ8eS9SzX=s70-p-k-rw-no",
                        'online' => true
                    ],
                    [
                        'name' => "Владислав Долгушин",
                        'image' => "https://lh3.googleusercontent.com/a-/AOh14Gj7JgQIobsoFr7Z4HywgBU1b6iLJwUnKgHq1Sb5zQ=s70-p-k-rw-no",
                        'online' => false
                    ]
                ]
            ]
        ]);
    }

    /**
     * @Route("/worker/console", name="console")
     */
    public function viewConsole() {
        return $this->render('worker/console.html.twig', [
            'page' => [
                'title' => "Панель арбитражника"
            ],
            'ui' => [
                'user' => [
                    'name' => "Ефим Беляков",
                    'image' => "https://lh3.googleusercontent.com/-Y2-q0LmvSnw/AAAAAAAAAAI/AAAAAAAAAAA/AAKWJJP8lbbYmr0-D42ys4XMOlZWq7_1Fw.CMID/s32-c/photo.jpg"
                ],
                'team_members' => [
                    [
                        'name' => "Егор Будко",
                        'image' => "https://lh3.googleusercontent.com/a-/AOh14GjpuJRtRtY63e5VUQqAr4F63dQ7ezv9Cj0pHFzm=s70-p-k-rw-no",
                        'online' => true
                    ],
                    [
                        'name' => "Ефим Беляков",
                        'image' => "https://lh3.googleusercontent.com/-Y2-q0LmvSnw/AAAAAAAAAAI/AAAAAAAAAAA/AAKWJJP8lbbYmr0-D42ys4XMOlZWq7_1Fw.CMID/s32-c/photo.jpg",
                        'online' => true
                    ],
                    [
                        'name' => "NEO",
                        'image' => "https://lh3.googleusercontent.com/a-/AOh14GjurRfo2vgb9mfI2_7JxANJOowMe0fVKz5L4TICQw=s96-k-no",
                        'online' => false
                    ],
                    [
                        'name' => "Владимир Леншин",
                        'image' => "https://lh3.googleusercontent.com/a-/AOh14GgLXGfDtXyiB-I-dIkVkOd9p7iSTAbAQ8eS9SzX=s70-p-k-rw-no",
                        'online' => true
                    ],
                    [
                        'name' => "Владислав Долгушин",
                        'image' => "https://lh3.googleusercontent.com/a-/AOh14Gj7JgQIobsoFr7Z4HywgBU1b6iLJwUnKgHq1Sb5zQ=s70-p-k-rw-no",
                        'online' => false
                    ]
                ]
            ]
        ]);
    }
}