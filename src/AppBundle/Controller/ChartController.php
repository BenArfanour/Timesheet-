<?php
/**
 * Created by PhpStorm.
 * User: hamza
 * Date: 03/07/18
 * Time: 14:52
 */

namespace AppBundle\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ChartController extends Controller
{
    /**
     * @Route("/chart",name="chart")
     */
    public function chartAction()
    {
        // Chart
        $series = array(
            array("name" => "Data Serie Name",    "data" => array(1,2,4,5,6,3,8))
        );

        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->title->text('Chart Title');
        $ob->xAxis->title(array('text'  => "Horizontal axis title"));
        $ob->yAxis->title(array('text'  => "Vertical axis title"));
        $ob->series($series);

        return $this->render('::Chart.html.twig', array(
            'chart' => $ob
        ));
    }
}