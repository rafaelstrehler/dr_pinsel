jQuery(document).ready(function () {
  jQuery('.logo').addClass('zoominout');

  setTimeout( function(){
      jQuery('.logo').removeClass('zoominout');
    }, 300 );

    const code = document.getElementById('code');

    jQuery('#submitbtn').on('click', function (e) {
        const target = document.getElementById('target');
        e.preventDefault();
        jQuery.ajax({
            type: "POST",
            url: adminUrl.ajax_url,
            data: {
                action: 'check_code',
                nonce: adminUrl.nonce,
                code: code.value
            },
            success: function (r) {
                target.innerHTML = r;
            }
        });
    });

    jQuery('#registerbtn').on('click', function (e) {

        const email = document.getElementById('email');
        const phone = document.getElementById('phone');
        const postId = document.getElementById('postId');
        const notes = document.getElementById('notes');
        const register = jQuery('input[name=register]:checked').val();


        e.preventDefault();
        const target = document.getElementById('target');
        const target2 = document.getElementById('target2');
        jQuery.ajax({
            type: "POST",
            url: adminUrl2.ajax_url,
            data: {
                action: 'check_code2',
                nonce: adminUrl2.nonce,
                email: email.value,
                phone: phone.value,
                postId : postId.value,
                notes : notes.value,
                register: register
            },
            success: function (r) {
                if (email.value.length == 0) {
                  target2.innerHTML = r;
                } else {
                  target.innerHTML = r;

                }
            }
        });
    });
});
