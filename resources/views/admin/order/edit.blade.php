@extends('layouts.app')
@section('content')




<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="body" style="margin-top: 20px">
                <form method="post" action="{{url('Order/update/'.$orders->id)}}">
                    @csrf
            

                    <div class="form-group">
                        <label for="product_id">product_id:</label>
                        <input type="number" class="form-control" id="product_id" name="product_id" required>
                      </div>
                      <div class="form-group">
                        <label for="user_id">user_id:</label>
                        <input type="number" class="form-control" id="user_id" name="user_id" required>
                      </div>
                      <div class="form-group">
                        <label for="quantity">quantity:</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" required>
                      </div>

                      <div class="form-group">
                        <label for="total_price">total_price:</label>
                        <input  type="number" class="form-control" id="total_price" name="total_price" required>

                      </div>
                      <div class="form-group">
                          <label for="delivery_date">Delivery Date</label>
                          <input type="date" class="form-control" name="delivery_date" value="delivery_date"required>
                      </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
</main>
@endsection
