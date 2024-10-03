$(document).ready(function() {
    // $('#phone-1').mask('+7 (999) 999-99-99', {
    //     placeholder: "_"
    // });

    $('#submit-btn, #submit-btn-1').on('click', function(e) {
        let activeTab = $('.tab-pane.active');  
        let isValid = true;


        activeTab.find('input').each(function() {
            if ($(this).val().trim() === '') {
                $(this).addClass('is-invalid');  
                isValid = false;
            } else {
                $(this).removeClass('is-invalid');  
            }
        });

        if (!isValid) {
            e.preventDefault();  
        }
    });

    $('.selectpicker').on('shown.bs.select', function () {
        $(this).closest('.custom-select-wrapper').find('.dropdown-icon').addClass('rotate');
    }).on('hidden.bs.select', function () {
        $(this).closest('.custom-select-wrapper').find('.dropdown-icon').removeClass('rotate');
    });
});


document.addEventListener('DOMContentLoaded', function() {



    const form1 = document.querySelector('.cart-contact-form-new__delivery_1');
    const radioDefault1 = document.getElementById('delivery-1-1');
    const radioDefault2 = document.getElementById('delivery-1-2');

    const form2 = document.querySelector('.cart-contact-form-new__delivery_2');
    const radioDefault3 = document.getElementById('delivery-2-1');
    const radioDefault4 = document.getElementById('delivery-2-2');

    const form3 = document.querySelector('.cart-contact-form-new__delivery_3');
    const radioDefault5 = document.getElementById('delivery-3-1');
    const radioDefault6 = document.getElementById('delivery-3-2');

    
    


    function toggleForm() {
        if (radioDefault2.checked) {
            form1.style.display = 'block';
        } else {
            form1.style.display = 'none';
        }
    }
    function toggleForm2() {
        if (radioDefault4.checked) {
            form2.style.display = 'block';
        } else {
            form2.style.display = 'none';
        }
    }
    function toggleForm3() {
        if (radioDefault6.checked) {
            form3.style.display = 'block';
        } else {
            form3.style.display = 'none';
        }
    }


    toggleForm();
    toggleForm2();
    toggleForm3();


    radioDefault1.addEventListener('change', toggleForm);
    radioDefault2.addEventListener('change', toggleForm);

    radioDefault3.addEventListener('change', toggleForm2);
    radioDefault4.addEventListener('change', toggleForm2);

    radioDefault5.addEventListener('change', toggleForm3);
    radioDefault6.addEventListener('change', toggleForm3);



    const payList = document.querySelector('.pay-list');
            
            if (payList) {
                payList.addEventListener('click', function(e) {
                    if (e.target.tagName === 'BUTTON') {
                        document.querySelectorAll('.pay-item').forEach(item => {
                            item.classList.remove('active');
                        });
                        e.target.closest('.pay-item').classList.add('active');
                    }
                });
            } else {
                console.error('Element .pay-list not found');
            }

    
    

});

let deliveryDate = document.getElementById('deliveryDate')

if (deliveryDate) {
    deliveryDate.addEventListener('change',(e)=>{
        let startDateVal = e.target.value
        document.getElementById('deliverytDateSelected').innerText = startDateVal
    })
}

const geoAddressInput = document.getElementById('geoAddress');

console.log(geoAddressInput)

if (geoAddressInput) {
    window.ymaps.ready(() => {
        var suggestView = new window.ymaps.SuggestView(geoAddressInput);
    })
}



