$( document ).ready(function(){
    var addService = $('#add_service');
    var services = $('.service');
    var placeholder = $('#new_service');
    var template = $('#service-template').clone();
    var remove = true;

    addService.click(function( e ){
        e.preventDefault();

        remove = !remove;
        if(!remove){
            addService.html('<i class="fa fa-minus"></i> Odstrániť ponuku');
            addService.removeClass('btn-success');
            addService.addClass('btn-danger');

            template.find('.panel-default').addClass('service');
            template.find('.panel-title__number').text('0' + (services.length+1));
            template.find('.panel-heading').attr('id', 'heading4-' + (services.length+1));
            template.find('.panel-open').attr('href', '#collapse4-' + (services.length+1));
            template.find('.panel-open').attr('aria-controls', '#collapse4-' + (services.length+1));
            template.find('.panel-collapse').attr('id', '#collapse4-' + (services.length+1));
            template.find('.panel-collapse').attr('aria-labelledby', '#collapse4-' + (services.length+1));
            template.find('.panel-collapse').css({ display: 'block', height: '200px', width: '150px' });
            template.find('.iconpicker-container').iconpicker();
            template.find('#new_summernote').summernote();
            /*icon color*/
            if(services.last().find('.circled-icon').hasClass('icon-color2')){
                template.find('.circled-icon').removeClass('icon-color2');
                template.find('.circled-icon').addClass('icon-color4');
            }else if(services.last().find('.circled-icon').hasClass('icon-color4')){
                template.find('.circled-icon').removeClass('icon-color4');
                template.find('.circled-icon').addClass('icon-color2');
            }

            placeholder.append(template);

            $(".iconpicker").iconpicker({
                align: 'center', // Only in div tag
                arrowClass: 'btn-success',
                arrowPrevIconClass: 'fa fa-arrow-left',
                arrowNextIconClass: 'fa fa-arrow-right',
                cols: 5,
                footer: true,
                header: true,
                icon: 'fa-adjust',
                iconset: 'fontawesome',
                labelHeader: '{0} of {1} pages',
                labelFooter: '{0} - {1} of {2} icons',
                placement: 'bottom', // Only in button tag
                rows: 5,
                search: true,
                searchText: 'Search',
                selectedClass: 'btn-success',
                unselectedClass: ''
            });
        }else{
            addService.html('<i class="fa fa-plus"></i> Pridať ponuku');
            addService.removeClass('btn-danger');
            addService.addClass('btn-success');

            services = $('.service');

            $('.nova_sluzba').remove();
        }
    });
});