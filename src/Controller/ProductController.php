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
                    return $this->generateUrl('productDetails', ['id'=> $item->getId()]);
                }, $items)
            ]
            
        );
    }

     /**
     * @Route("/product/{id}", name="productDetails", requirements={"id"="\d+"},  methods={"GET"})
     */
    public function productDetails(int $id)
    {
        $productDetails = $this->getDoctrine()->getRepository(TbProducts::class)->find($id);
        $data = [];
        $images = array(
                        array("productId"=> 1, 
                            "id"=> "2.1", 
                            "alt"=> "image1", 
                            "src"=> "/assets/images/pro3/1.jpg",
                            "__typename"=> "Images"),
                        array("productId"=> 2, 
                            "id"=> "1.2", 
                            "alt"=> "image1.2", 
                            "src"=> "/assets/images/pro3/2.jpg",
                            "__typename"=> "Images"),
                        array("productId"=> 3, 
                            "id"=> "1.3", 
                            "alt"=> "image 1.3", 
                            "src"=> "/assets/images/pro3/3.jpg",
                            "__typename"=> "Images"),
                        array("productId"=> 4, 
                            "id"=> "2.1", 
                            "alt"=> "olive", "
                            src"=> "/assets/images/pro3/3.jpg",
                            "__typename"=> "Images")
                    );

        $varients = array(
                    array("productId"=> 1, "id"=> "1.1",
                        "sku"=> "sku1",
                        "size"=>"s",
                        "color"=> "olive",
                        "image_id"=> 211,
                        "__typename"=> "Variants"), 
                    array("productId"=> 1, "id"=> "1.2",
                        "sku"=> "sku1",
                        "size"=>"s",
                        "color"=> "olive",
                        "image_id"=> 211,
                        "__typename"=> "Variants"), 

                    array("productId"=> 1, "id"=> "1.3",
                        "sku"=> "sku1",
                        "size"=>"s",
                        "color"=> "olive",
                        "image_id"=> 211,
                        "__typename"=> "Variants"), 
                        
                    array("productId"=> 2, "id"=> "1.4",
                        "sku"=> "sku1",
                        "size"=>"s",
                        "color"=> "olive",
                        "image_id"=> 211,
                        "__typename"=> "Variants")
             );

             $data['id'] = $productDetails->getId();
             $data['title'] = $productDetails->getProductTitle();
             $data['description'] = $productDetails->getProductTitle();
             $data['type'] = $productDetails->getProductType();
             $data['brand'] = $productDetails->getProductTitle();
             $data['category'] = $productDetails->getCategory()->getCategoryName();
             $data['price'] = $productDetails->getProductPrice();
             $data['new'] = $productDetails->getProductStatus();
             $data['stock'] = $productDetails->getProductStatus();
             $data['discount'] = $productDetails->getProduct_discount();
             
             if(!empty($productDetails->getProductSize()->getSizeName()) && is_null($productDetails->getProductSize()->getSizeName())){
               $data['size'] = $productDetails->getProductSize()->getSizeName();
             }

             $data['color'] = is_null($productDetails->getProductColor()->getColorName())? "":$productDetails->getProductColor()->getColorName();
             $data['instock'] = $productDetails->getProduct_instoct();  
             $data['sale'] = 'true';
             $data['images'] = $images[rand(0, 3)];
             $data['variants'] = $varients[rand(0, 3)];
        return $this->json(["status" => "success", "data" => $data]);
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

    /**
     *  @Route("/product/detial",  name="productList",  methods={"GET"})
     */
    public function productList(Request $request)
    {
        $limit = $request->get('limit', 10);
        $repository = $this->getDoctrine()->getRepository(TbProducts::class);
        $items = $repository->findBy(array(), array('id' => 'DESC'));
        $data = [];
        $images = array(
                        array("productId"=> 1, 
                            "id"=> "2.1", 
                            "alt"=> "image1", 
                            "src"=> "/assets/images/pro3/1.jpg",
                            "__typename"=> "Images"),
                        array("productId"=> 2, 
                            "id"=> "1.2", 
                            "alt"=> "image1.2", 
                            "src"=> "/assets/images/pro3/2.jpg",
                            "__typename"=> "Images"),
                        array("productId"=> 3, 
                            "id"=> "1.3", 
                            "alt"=> "image 1.3", 
                            "src"=> "/assets/images/pro3/3.jpg",
                            "__typename"=> "Images"),
                        array("productId"=> 4, 
                            "id"=> "2.1", 
                            "alt"=> "olive", "
                            src"=> "/assets/images/pro3/3.jpg",
                            "__typename"=> "Images")
                    );

        $varients = array(
                    array("productId"=> 1, "id"=> "1.1",
                        "sku"=> "sku1",
                        "size"=>"s",
                        "color"=> "olive",
                        "image_id"=> 211,
                        "__typename"=> "Variants"), 
                    array("productId"=> 1, "id"=> "1.2",
                        "sku"=> "sku1",
                        "size"=>"s",
                        "color"=> "olive",
                        "image_id"=> 211,
                        "__typename"=> "Variants"), 

                    array("productId"=> 1, "id"=> "1.3",
                        "sku"=> "sku1",
                        "size"=>"s",
                        "color"=> "olive",
                        "image_id"=> 211,
                        "__typename"=> "Variants"), 
                        
                    array("productId"=> 2, "id"=> "1.4",
                        "sku"=> "sku1",
                        "size"=>"s",
                        "color"=> "olive",
                        "image_id"=> 211,
                        "__typename"=> "Variants")
             );
            

        if(!empty($items)){
            foreach ($items as $key => $itemsvalue) {
              $data[$key]['id'] = $itemsvalue->getId();
              $data[$key]['title'] = $itemsvalue->getProductTitle();
              $data[$key]['description'] = $itemsvalue->getProductTitle();
              $data[$key]['type'] = $itemsvalue->getProductType();
              $data[$key]['brand'] = $itemsvalue->getProductTitle();
              $data[$key]['category'] = $itemsvalue->getCategory()->getCategoryName();
              $data[$key]['price'] = $itemsvalue->getProductPrice();
              $data[$key]['new'] = $itemsvalue->getProductStatus();
              $data[$key]['stock'] = $itemsvalue->getProductStatus();
              $data[$key]['discount'] = $itemsvalue->getProduct_discount();
              if(!empty($itemsvalue->getProductSize()->getSizeName()) && is_null($itemsvalue->getProductSize()->getSizeName())){
                $data[$key]['size'] = $itemsvalue->getProductSize()->getSizeName();
              }

              $data[$key]['color'] = is_null($itemsvalue->getProductColor()->getColorName())? "":$itemsvalue->getProductColor()->getColorName();
              $data[$key]['instock'] = $itemsvalue->getProduct_instoct();  
              $data[$key]['sale'] = 'true';
              $data[$key]['images'] = $itemsvalue->getImage();
              $data[$key]['variants'] = $images[rand(0, 3)];

            }
        }

        return $this->json(["status" => "success", "data" => $data]);
    }



}
