<div class="col-md-12">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                
                    {{--<form action="{{ route('orders.store') }}" method="post">
                    @csrf--}}
                    <div class="card-body">
                        
                    <div class="my-2">
                        <form wire:click.prevent="InserttoCart">
                            <input type="text" name="" wire:model="product_code" id="" class="form-control" placeholder="Enter Product Code">
                        </form>
                        </div>

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @elseif(session()->has('info'))
                            <div class="alert alert-info">
                                {{ session('info') }}
                            </div>
                        @elseif(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                    <table class="table table-bordered table-left">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th colspan="6">Total</th>
                                {{--<th><a href="#" class="btn btn-sm btn-success rounded-circle add_more"><i class="fa fa-plus"></i></th>--}}
                            </tr>
                        </thead>
                        <tbody class ="addMoreProduct">
                            @foreach ($productInCart as $key=>$cart)
                        
                            <tr>
                                <td class="no">{{ $key + 1 }}</td>
                                <td width="20%">
                                    <input type="text" class="form-control" value="{{ $cart->product->foodname }}">
                                </td>
                                <td width="15%">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <button wire:click.prevent="IncrementQty({{ $cart->id }})" class="btn btn-sm btn-success"> + </button>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">{{ $cart->product_qty }}</label>
                                        </div>
                                        <div class="col-md-2">
                                            <button wire:click.prevent="DecrementQty({{ $cart->id }})" class="btn btn-sm btn-danger"> - </button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <input type="number" class="form-control price" value="{{ $cart->product->price }}">
                                </td>

                                <td width="18%">
                                    <input type="number"  class="form-control total_amount" value="{{ $cart->product_qty * $cart->product->price }}">
                                </td>
                                <td><a href="#" class="btn btn-sm btn-danger rounded-circle" wire:click="removeProduct({{ $cart->id }})"><i class="fa fa-times" >Remove</i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                
                </div>
            
            
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="header">
                    <h4>Total <b class="total">{{ $productInCart->sum('product_price') }}</b></h4>
                </div>

                <form action="{{ route('orders.store') }}" method="POST">
                    @csrf
                    @foreach ($productInCart as $key=>$cart)
        
                            <input type="hidden" class="form-control" name="product_id[]" value="{{ $cart->product->id }}">
            
                            <input type="hidden" name="quantity[]" value="{{ $cart->product_qty }}">
                         
                            <input type="hidden" name="price[]" class="form-control price" value="{{ $cart->product->price }}">
        
                            <input type="hidden" name="total_amount[]" class="form-control total_amount" value="{{ $cart->product_qty * $cart->product->price }}">
        
                
                    @endforeach


                <div class="content">
                    
                    <div class="btn-group">
                        <button type="button" onclick="PrintReceiptContent('print')" class="btn btn-dark"><i class="fa fa-print"></i> Print </button>
                        <button type="button" onclick="PrintReceiptContent('print')" class="btn btn-primary"><i class="fa fa-print"></i> History </button>
                        <button type="button" onclick="PrintReceiptContent('print')" class="btn btn-danger"><i class="fa fa-print"></i> Report </button>
                    </div>
                    
                    <div class="panel">
                        <div class="row">
                            <table class="table table-striped">
                                <tr>
                                    <td>
                                        <label for="">Customer Name</label>
                                            <input type="text" name="customer_name" id="" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <label for="">Customer Phone</label>
                                            <input type="number" name="customer_phone" id="" class="form-control">
                                        </div>
                                    </td>
                                    <input type="hidden" name="status" id="" value="Pending">
                                </tr>
                            </table>

                            <table class="table table-striped">
                                <tr>
                                    <td> Payment Method <br>
                                        <span class="radio-item">
                                            <input type="radio" name="payment_method" id="payment_method" class="true" value="cash" checked>
                                            <label for="payment_method"><i class="fa fa-money-bill text-success"></i>Cash</label>
                                        </span>
                                        <span class="radio-item">
                                            <input type="radio" name="payment_method" id="payment_method" class="true" value="credit card" checked>
                                            <label for="payment_method"><i class="fa fa-credit-card text-success"></i>Credit Card</label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Payment
                                        <input type="number" wire:model="pay_money" name="paid_amount" id="paid_amount" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Returning Change
                                        <input type="number" wire:model="balance" name="balance" id="balance" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button class="btn btn-primary ">Save</button>
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>

      


        
    </div>
</div>