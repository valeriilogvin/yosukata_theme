$(document).ready(function() {
    // fixed menu in catalogue
    $(function () {
        var $fixedCatalogueMenu = $('.js-fixed-catalogue'),
            $fixedCatalogueMenuContairer = $('.js-col-2'),
            $elementTop = $fixedCatalogueMenu.offset().top,
            $elementHeight = $fixedCatalogueMenu.outerHeight(),
            $containerHeight = $fixedCatalogueMenuContairer.outerHeight();

        $window.scroll(function () {
            if (($window.scrollTop() > $elementTop - 100) && ($window.scrollTop() < $containerHeight - 250)) {
                $fixedCatalogueMenu.addClass('fixed');
            } else {
                $fixedCatalogueMenu.removeClass('fixed');
            }
        });
    });

    // toggle class in fixed menu in catalogue
    $(function () {
        let $window = $(window);
        $window.scroll(function () {
            let $fixedCatalogue = $('.js-fixed-catalogue'),
                ws = $window.scrollTop() + 250,
                $firstItem = $('.js-catalogue-item:nth-child(1)'),
                $secondItem = $('.js-catalogue-item:nth-child(2)'),
                $thirdItem = $('.js-catalogue-item:nth-child(3)'),
                $fourthItem = $('.js-catalogue-item:nth-child(4)'),
                $fifthItem = $('.js-catalogue-item:nth-child(5)'),
                $sixthItem = $('.js-catalogue-item:nth-child(6)'),
                $firstItemOffset = $firstItem.offset().top,
                $firstItemHeight = $firstItem.outerHeight(),
                $secondItemOffset = $secondItem.offset().top,
                $thirdItemOffset = $thirdItem.offset().top,
                $fourthItemOffset = $fourthItem.offset().top,
                $fifthItemOffset = $fifthItem.offset().top,
                $sixthItemOffset = $sixthItem.offset().top;

            if ((ws > $firstItemOffset - 150) && (ws <= $firstItemHeight + 300)) {
                $fixedCatalogue.find('li').removeClass('active')
                $fixedCatalogue.find('li:nth-child(1)').addClass('active')
            }
            if (ws > $secondItemOffset) {
                $fixedCatalogue.find('li').removeClass('active')
                $fixedCatalogue.find('li:nth-child(2)').addClass('active')
            }
            // if (ws > $thirdItemOffset) {
            //     $fixedCatalogue.find('li').removeClass('active')
            //     $fixedCatalogue.find('li:nth-child(3)').addClass('active')
            // }
            // if (ws > $thirdItemOffset) {
            //     $fixedCatalogue.find('li').removeClass('active')
            //     $fixedCatalogue.find('li:nth-child(3)').addClass('active')
            // }
            // if (ws > $fourthItemOffset) {
            //     $fixedCatalogue.find('li').removeClass('active')
            //     $fixedCatalogue.find('li:nth-child(4)').addClass('active')
            // }
            // if (ws > $fifthItemOffset) {
            //     $fixedCatalogue.find('li').removeClass('active')
            //     $fixedCatalogue.find('li:nth-child(5)').addClass('active')
            // }
            // if (ws > $sixthItemOffset) {
            //     $fixedCatalogue.find('li').removeClass('active')
            //     $fixedCatalogue.find('li:nth-child(6)').addClass('active')
            // }

        });
    });
});