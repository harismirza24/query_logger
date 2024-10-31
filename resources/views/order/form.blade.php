<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="customer_name" class="form-label">{{ __('Customer Name') }}</label>
            <input type="text" name="customer_name" class="form-control @error('customer_name') is-invalid @enderror" value="{{ old('customer_name', $order?->customer_name) }}" id="customer_name" placeholder="Customer Name">
            {!! $errors->first('customer_name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="business_partner_name" class="form-label">{{ __('Business Partner Name') }}</label>
            <input type="text" name="business_partner_name" class="form-control @error('business_partner_name') is-invalid @enderror" value="{{ old('business_partner_name', $order?->business_partner_name) }}" id="business_partner_name" placeholder="Business Partner Name">
            {!! $errors->first('business_partner_name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="product_name" class="form-label">{{ __('Product Name') }}</label>
            <input type="text" name="product_name" class="form-control @error('product_name') is-invalid @enderror" value="{{ old('product_name', $order?->product_name) }}" id="product_name" placeholder="Product Name">
            {!! $errors->first('product_name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="product_number" class="form-label">{{ __('Product Number') }}</label>
            <input type="text" name="product_number" class="form-control @error('product_number') is-invalid @enderror" value="{{ old('product_number', $order?->product_number) }}" id="product_number" placeholder="Product Number">
            {!! $errors->first('product_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="total_amount" class="form-label">{{ __('Total Amount') }}</label>
            <input type="text" name="total_amount" class="form-control @error('total_amount') is-invalid @enderror" value="{{ old('total_amount', $order?->total_amount) }}" id="total_amount" placeholder="Total Amount">
            {!! $errors->first('total_amount', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="status" class="form-label">{{ __('Status') }}</label>
            <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status', $order?->status) }}" id="status" placeholder="Status">
            {!! $errors->first('status', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>