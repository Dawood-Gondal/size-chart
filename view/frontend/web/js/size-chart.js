/**
 * @category    M2Commerce Enterprise
 * @package     M2Commerce_SizeChart
 * @copyright   Copyright (c) 2023 M2Commerce Enterprise
 * @author      dawoodgondaldev@gmail.com
 */

require([
    'jquery',
    'Magento_Ui/js/modal/modal',
], function ($, modal) {
    var options = {
        type: 'popup',
        responsive: true,
        innerScroll: true,
        modalClass: "size-chart__popup--wrapper",
        buttons: []
    };

    var popup = modal(options, $('#size-chart-popup'));
    $("#size-chart-btn").on('click',function(){
        $("#size-chart-btn").css("display", "block");
        $("#size-chart-popup").modal("openModal");
    });
});
