<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
<body>
    @include('layout/faculty-header',array('faculty'=>'faculty'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/faculty','/faculty/order-details-item'),
            'text'=> array('faculty','order-details-item')
        )))

    @include('layout/order-details')
    @include('layout/footer')
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
    }
    
    .active-cat{
        color: #2176bd !important;
    }
    
    </style>
<script src="{{ asset('js/app.js') }}"></script>
</html>
