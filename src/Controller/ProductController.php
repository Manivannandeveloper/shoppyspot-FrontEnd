<?php

namespace App\Controller;

use App\Entity\TbCategory;
use App\Entity\TbProducts;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Json;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends AbstractController
{
     /**
     *  @Route("/{page}",  name="blog_list", defaults={"page"= 5},  requirements={"page"="\d+"},  methods={"GET"})
     */
    public function Postlist($page = 1, Request $request)
    {
        $limit = $request->get('limit', 10);
       
        $repository = $this->getDoctrine()->getRepository(TbProducts::class);
        $items = $repository->findAll();

        return $this->json(
            [
                "page" => $page,
                "limit" => $limit,
                "data" => array_map(function(TbProducts $item){
                   // return $item->getSlugname();
                    return $this->generateUrl('product_by_id', ['id'=> $item->getId()]);
                }, $items)
            ]
            
        );
    }

     /**
     * @Route("/product/{id}", name="product_by_id", requirements={"id"="\d+"},  methods={"GET"})
     */
    public function post(TbProducts $post)
    {
        // it is also same as "$this->getDoctrine()->getRepository(BlogPost::class)->find($id)"
         return $this->json($post);
    }

    /**
     * @Route("/product/add", name="productAdd", methods={"POST"})
     * 
     * 
     */
    public function productAdd(Request $request)
    {
        $serializer = $this->get('serializer');
        $productPost = $serializer->deserialize($request->getContent(), TbProducts::class, 'json');
        $em = $this->getDoctrine()->getManager();
        $em->persist($productPost);
        $em->flush();
        return $this->json($productPost);

    }

    /**
     * @Route("/product/delete/{id}", name="productDelete", methods={"DELETE"})
     */
    public function delete(TbProducts $product)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($product);
        $em->flush();
        return $this->json(["status"=>"Delete Successfully"]);
    }

}
