<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Job;
use App\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Knp\Component\Pager\PaginatorInterface;

class CategoryController extends Controller
{
    /**
     *
     * @Route(
     *     "/category/{slug}/{page}",
     *     name="category.show",
     *     methods="GET",
     *     defaults={"page": 1},
     *     requirements={"page" = "\d+"}
     * )
     *
     * @param Category $category
     * @param PaginatorInterface $paginator
     * @param int $page
     *
     * @return Response
     */

    public function show(Category $category,int $page, PaginatorInterface $paginator): Response
    {

        $activeJobs=$paginator->paginate(
            $this->getDoctrine()->getRepository(Job::class)->getPaginatedActiveJobsByCategoryQuery($category),
            $page,
            $this->getParameter('max_jobs_on_category')
        );
        return $this->render('category/show.html.twig',[
            'category'=>$category,
            'activeJobs'=>$activeJobs
        ]);
    }
}