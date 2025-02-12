<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/api/products', name: 'api_product_list', methods: ['GET'])]
    public function list(): JsonResponse
    {
        return $this->json([
            ['id' => 1, 'name' => 'France', 'flag' => 'https://flagcdn.com/w320/fr.png'],
            ['id' => 2, 'name' => 'Allemagne', 'flag' => 'https://flagcdn.com/w320/de.png'],
            ['id' => 3, 'name' => 'Espagne', 'flag' => 'https://flagcdn.com/w320/es.png']
        ]);
    }
}
