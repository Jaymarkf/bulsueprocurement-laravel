<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
<body>
    @include('layout/faculty-header',array('faculty'=>'faculty'))
    @include('layout/user-breadcrumbs' ,array('breadcrumbs'=>array(
            'link'=> array('/faculty','/faculty/price-catalogue'),
            'text'=> array('faculty','price-catalogue')
        )))
    @include('layout/faculty-body')

    <div id="Footer-content">
    @include('layout/footer')
    </div>
</body>
<style>
.custom-checkbox .custom-control-label.text-white::before {
    border-radius: 0.25rem;
    color: transparent;
    background-color: transparent;
    border: transparent;
}
.custom-checkbox .custom-control-input.category_checkbox:checked ~ .custom-control-label.text-white::after {
    background: transparent;
}
.custom-control-label.text-white::after, .custom-control-label.text-white::before{
    display: none;
}   

.active-cat .label-categ {
    color: #2176bd !important;
}
#input__search::-webkit-input-placeholder{

}

#allItem_label:hover{
    cursor: pointer;
    background: #fff;
    color: #2176bd !important;
}

.active-cat{
    color: #2176bd !important;
}
.is-active{
    background: #fff;
}
.is-active label{
    color: #2176bd !important;
}
</style>
<script src="{{ asset('js/app.js') }}"></script>

<script>
$(document).ready(function() {
    $(document).on('click', '.category_checkbox', function () {
        $("#allItem_label").removeClass("active-cat");
        var ids = [];

        var counter = 0;
        $('#catFilters').empty();
        $('.category_checkbox').each(function () {
            if ($(this).is(":checked")) {
                ids.push($(this).attr('id'));
                counter++;
                $(this).parent().addClass('active-cat');
            }else{
                $(this).parent().removeClass('active-cat');
            }
        });
        setTimeout(function(){
            if(counter != 0){
                $('#item_count').text($("#all_Items div").length);
            }else{
                $('#item_count').text($("#All_Data div").length);
                $("#allItem_label").addClass('active-cat');
            }
        }, 500)
       

        if (counter == 0) {
            $('#all_Items').empty();
            $('#all_Items').hide();
            $('#All_Data').css("cssText","display: grid !important")
        } else {
            fetchCauseAgainstCategory(ids);
            $("#all_Items").show();
            $('#All_Data').css("cssText","display: none !important")
        }
    });
});

function fetchCauseAgainstCategory(id) {

    $('#all_Items').empty();

    $.ajax({
        type: 'GET',
        url: 'faculty/' + id,
        success: function (response) {

            console.log('REsponse');
            var response = JSON.parse(response);

            
            if (response.length == 0) {
                $('#all_Items').append('No Data Found');
            } else {
                response.forEach(element => {
                    $('#all_Items').append(`<div >
                        <ul>
                        <h5 class="h4 text-blue-500 m-0">${element.cat_name}</h5>
                        <h2 class="h4 text-yellow-500 my-3">${element.cat_price} / ${element.cat_unit}</h2>
                        
                        <p>${element.description}</p>
                            <a href="/faculty/order-details-item" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Item Details </a>
                        </ul>
                    </div>`);
                });
            }
        }
    });
} 
</script>

<script>
    $("#allItem_label").click(function(){
        $(this).addClass("active-cat");
        $('#item_count').text($("#All_Data div").length);
        $("#all_Items").attr('style', 'display: none !important');
        $("#All_Data").show();
        $('.category_checkbox, .custom-checkbox').removeClass('active-cat');
        $('.category_checkbox').prop('checked', false);

    });
</script>

<script>


$("ul.list-unstyled.components .custom-control.custom-checkbox").hover(
  function () {
    $(this).addClass("is-active");
  },
  function () {
    $(this).removeClass("is-active");
  }
);

</script>


<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('#yearbtn').tooltip('show');
        $('#yearbtn').tooltip('hide');
   });
</script> -->

</html>
