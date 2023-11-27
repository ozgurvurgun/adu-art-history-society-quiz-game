<?php

namespace CompartSoftware\App\Controller;

use CompartSoftware\System\Core\Controller;

class GetQuestion extends Controller
{
    public function index()
    {
        $data = '[
            {
              "id": "0",
              "question": " Hangi sanat akımı, 19. yüzyıl sonlarından 20. yüzyılın başlarına kadar olan dönemde, soyutlamayı ve deneysel teknikleri vurgulayarak geleneksel sanat normlarına meydan okumuştur?",
              "options": ["Rönesans", "Barok", "İmpresyonizm", "Romantizm"],
              "correct": "İmpresyonizm"
            },
            {
              "id": "1",
              "question": "Barok döneminin önemli bir ressamı olan ve Caravaggio&#39;nun öğrencisi olarak bilinen bu sanatçı, dramatik aydınlatma tekniğiyle tanınır. Hangi sanatçıdan bahsediyoruz?",
              "options": [
                "Rembrandt van Rijn",
                "Jan Vermeer",
                "Peter Paul Rubens",
                "Hieronymus Bosch"
              ],
              "correct": "Rembrandt van Rijn"
            },
            {
              "id": "2",
              "question": "&#39;Mona Lisa&#39; adlı ünlü tablonun yaratıcısı kimdir?",
              "options": [
                "Michelangelo",
                "Vincent van Gogh",
                "Leonardo da Vinci",
                "Pablo Picasso"
              ],
              "correct": "Leonardo da Vinci"
            },
            {
              "id": "3",
              "question": "20. yüzyılın başlarında, kim, ünlü &#39;Scream&#39; tablosunun yaratıcısı olarak bilinir ve bu eserini hangi sanat akımı içinde üretti?",
              "options": [
                "Vincent van Gogh",
                "Edvard Munch, Sürrealizm",
                "Wassily Kandinsky, İzlenimcilik",
                "Georges Seurat, Post-İzlenimcilik"
              ],
              "correct": "Edvard Munch, Sürrealizm"
            },
            {
              "id": "4",
              "question": "Ünlü İtalyan ressam Caravaggio&#39;nun stilinin önemli bir özelliği nedir ve hangi dönemde faaliyet göstermiştir?",
              "options": [
                "Rönesans&#39;ta perspektif kullanımı, Barok dönemde",
                "İzlenimcilik tarzı, Rönesans döneminde",
                "Tenebrizm tekniği, Rönesans döneminde",
                "Fütürizm akımı, Barok döneminde"
              ],
              "correct": "Tenebrizm tekniği, Rönesans döneminde"
            },
            {
              "id": "5",
              "question": "&#39;Guernica&#39; adlı ünlü tablo hangi olayı ve sanatçısı tarafından yaratılmıştır?",
              "options": [
                "İspanya İç Savaşı&#39;nı, Salvador Dalí",
                "II. Dünya Savaşı&#39;nı, Pablo Picasso",
                "Hiroşima bombalamasını, Jackson Pollock",
                "Rus Devrimi&#39;ni, Henri Matisse"
              ],
              "correct": "II. Dünya Savaşı&#39;nı, Pablo Picasso"
            },
            {
              "id": "6",
              "question": "15. yüzyılda Floransa&#39;da yaşamış olan ve İtalyan Rönesansı&#39;nın öncülerinden biri olarak kabul edilen ünlü bir ressam ve mucit kimdir?",
              "options": [
                "Leonardo da Vinci",
                "Rembrandt van Rijn",
                "Vincent van Gogh",
                "Édouard Manet"
              ],
              "correct": "Leonardo da Vinci"
            }
          ]';

        echo trim($data);
    }
}
