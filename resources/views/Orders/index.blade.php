@extends('dashboard.header')

@section('content')

<div class="container-fluid">
    @livewire('order')
</div>

<div class="modal">
    <div id="print">
        @include('reports.receipt')
    </div>
</div>

@endsection

@section('script')
    <script>
       $('.add_more').on('click', function(){
        var product = $('.product_id').html();
        var numberofrow = ($('.addMoreProduct tr').length - 0) + 1;
        var tr = '<tr><td class="no">' + numberofrow + '</td>' +
            '<td><select class="form-control product_id" name="product_id[]">' + product + '</select></td>' + 
            '<td><input type="number" name="quantity[]" class="form-control quantity"></td>' +
            '<td><input type="number" name="price[]" class="form-control price"></td>' +
            '<td><input type="number" name="discount[]" class="form-control discount"></td>' +
            '<td><input type="number" name="total_amount[]" class="form-control total_amount"></td>' +
            '<td><a class="btn btn-danger btn-sm delete rounded-circle"><i class="fa da-time-circle"></a></td>'
        $('.addMoreProduct').append(tr);
        });

        $('.addMoreProduct').delegate('.delete', 'click', function(){
            $(this).parent().parent().remove();
        });

        function TotalAmount(){
            var total = 0;
            $('.total_amount').each(function(i, e){
                var amount = $(this).val() - 0;
                total += amount;
            });

            $('.total').html(total);
        }

        $('.addMoreProduct').delegate('.product_id', 'change', function(){
            var tr = $(this).parent().parent();
            var price = tr.find('.product_id option:selected').attr('data-price');
            tr.find('.price').val(price);
            var qty = tr.find('.quantity').val() - 0;
            var disc = tr.find('.discount').val() - 0;
            var price = tr.find('.price').val() - 0;
            var total_amount = (qty * price) - ((qty * price * disc) / 100);
            tr.find('.total_amount').val(total_amount);
            TotalAmount();
        });

        $('.addMoreProduct').delegate('.quantity, .discount', 'keyup', function(){
            var tr = $(this).parent().parent();
            var qty = tr.find('.quantity').val() - 0;
            var disc = tr.find('.discount').val() - 0;
            var price = tr.find('.price').val() - 0;
            var total_amount = (qty * price) - ((qty * price * disc) / 100);
            tr.find('.total_amount').val(total_amount);
            TotalAmount();
        });

        $('#paid_amount').keyup(function(){
            var total = $('.total').html();
            var paid_amount = $(this).val();
            var tot = paid_amount - total;
            $('#balance').val(tot).toFixed(2);
        });

        //Print Section
        function PrintReceiptContent(el){
            var data = '<input type="button" id="printPageButton" class="printPageButton" style="display:block; width:100%; border:none; background-color: #008B8B; color: #fff; padding: 14px 28px; font-size:16px; curser:pointer; text-align:center;" value="Print Reciept" onClick="window.print()">';
            data += document.getElementById(el).innerHTML;
            myReceipt = window.open("", "myWin", "left=150, top=130, width=400, height=400");
            myReceipt.screenX = 0;
            myReceipt.screenY = 0;
            myReceipt.document.write(data);
            myReceipt.document.title = "Print Receipt";
            myReceipt.focus();
            setTimeout(() => {
                myReceipt.close();
            }, 8000);
        }

    </script>
@endsection