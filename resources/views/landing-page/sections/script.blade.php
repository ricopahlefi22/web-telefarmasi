    <!-- All JS Plugins -->
    <script src="{{ asset('assets-landing/js/plugins.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets-landing/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            $('body').on('click', '.quick-view', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: '/products/check',
                    method: 'POST',
                    data: {
                        id: id,
                    },
                    success: function(response) {
                        $("#quick_view_modal").modal('show');
                        $("#product_id_in_modal").val(response.id);
                        $("#product_image_in_modal").attr('src', '/' + response.image);
                        $("#product_name_in_modal").html(response.name);
                        $(".link-in-modal").attr('href', '/products/detail/' + response.id);
                        $("#product_price_in_modal").html('Rp. ' + response.price)
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });

            $('body').on('click', '.add-to-cart', function() {
                var id = $(this).data('id');
                var quantity = $(this).data('quantity');

                $.ajax({
                    url: '/products/add-to-cart',
                    method: 'POST',
                    data: {
                        product_id: id,
                        quantity: quantity,
                    },
                    success: function(response) {
                        console.log(response);
                        $("#cartWrapper").empty();
                        $("#cartWrapper").append(response.html);
                        $("#add_to_cart_modal").modal('show');
                        $("#product_image_in_modal_cart").attr('src', '/' + response.data
                            .image);
                        $("#product_name_in_modal_cart").html(response.data.name);
                        $(".link-in-modal").attr('href', '/products/detail/' + response.data
                            .id);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });

            $('#addToCartForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: '/products/add-to-cart',
                    method: 'POST',
                    data: new FormData(this),
                    processData: false,
                    dataType: "json",
                    contentType: false,
                    success: function(response) {
                        console.log(response);
                        $("#cartWrapper").empty();
                        $("#cartWrapper").append(response.html);
                        $("#quick_view_modal").modal('hide');
                        $("#add_to_cart_modal").modal('show');
                        $("#product_image_in_modal_cart").attr('src', '/' + response.data
                            .image);
                        $("#product_name_in_modal_cart").html(response.data.name);
                        $(".link-in-modal").attr('href', '/products/detail/' + response.data
                            .id);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
