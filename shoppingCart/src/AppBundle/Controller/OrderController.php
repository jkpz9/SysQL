<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Service\OrderService;
use AppBundle\Form\OrderSearchModelType;
use AppBundle\Model\OrderSearchModel;
use AppBundle\Validator\OrderValidator;
use AppBundle\Constant\PageConfig;


class OrderController  extends Controller {

    private $orderService;
    private $orderValidator;

    public function __construct(OrderService $orderService, OrderValidator $orderValidator) {
        
        $this->orderService = $orderService;
        $this->orderValidator = $orderValidator; 

    }

     /**
     * @Route("/order/search/{page}", name="order_search", requirements={"page"="\d+"}, defaults={"page"=1})
     */
     public function indexAction(Request $request, $page) {

        $model = new OrderSearchModel();

        $form = $this->createForm(OrderSearchModelType::class, $model);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $model = $form->getData();

            $this->orderValidator->validateSearchModel($model, $form);
            if($form->isValid()) {
                 $query_parameters = $request->query->all();

                // $page = $request->query->get('page');
                    echo 'page: ' . $page  . '<br/>';

                    $nRecord = $this->orderService->countByRangeDate($model);

                    echo 'nRecord: ' . $nRecord .'<br/>';

                    $du = ($nRecord%PageConfig::RECORD_PER_PAGE === 0) ? 0: 1;

                    $nPages = intdiv($nRecord,PageConfig::RECORD_PER_PAGE) + $du;

                    echo 'nPage: ' . $nPages .'<br/>';

                    $result = $this->orderService->searchByRangeDate($model, $page);
                    return $this->render('order/search.html.twig', array(
                        'form' => $form->createView(),
                        'title' => 'ORDER | SEARCH',
                        'orders' => $result,
                        'nPages' => $nPages,
                        'curPage' => $page
                    ));
            }    
            
        }

        return $this->render('order/search.html.twig', array(
            'form' => $form->createView(),
            'title' => 'ORDER | SEARCH'
        ));
     }

}