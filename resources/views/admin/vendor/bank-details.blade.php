@extends("admin.layouts.app")
@section('meta')
<meta name="csrf_token" content="{{ csrf_token() }}" />
@endsection

@section("content")
<div class="content-wrapper">
    <div class="row">
        <div class="mb-5 col-12 col-xl-12 mb-xl-0">
            <h3 class="font-weight-bold">Vendor bank Details</h3>
        </div>
        <div class="mt-3 col-md-12 ">
            @if(session("error"))
            <div class="alert alert-danger" role="alert">
                {{ session("error") }}
            </div>
            @endif
            @if(session("success"))
            <div class="alert alert-success" role="alert">
                {{ session("success") }}
            </div>
            @endif
            <div class="card">
               
              <div class="card-body">
                <h4 class="card-title">Update Details</h4>
                <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ route('vendor.update.bank.details') }}">
                  @csrf
                  <div class="row">
                    <div class="col-md-6"> 
                        <div class="form-group">
                            <label for="exampleInputEmail1">Bank Name</label>
                            <input type="text" class="form-control" value="{{ $vendorBankDetails->bank_name ? $vendorBankDetails->bank_name : ''}}"  name="bank_name"  placeholder=" Name">
                            @error("bank_name")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Account Name</label>
                            <input type="text" class="form-control"  name="account_name" value="{{ $vendorBankDetails->account_name ? $vendorBankDetails->account_name : ''}}"  placeholder="Bank Email">
                            @error("account_name")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Account Number</label>
                            <input type="text" class="form-control"   name="account_number" value="{{ $vendorBankDetails->account_number ? $vendorBankDetails->account_number : ''}}"  placeholder="Bank Country">
                            @error("account_number")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Branch Name</label>
                            <input type="text" class="form-control"   name="branch_name" value="{{ $vendorBankDetails->branch_name ? $vendorBankDetails->branch_name : ''}}"  placeholder="Bank City">
                            @error("branch_name")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Branch Address</label>
                            <input type="text" class="form-control"   name="branch_address" value="{{ $vendorBankDetails->branch_address ? $vendorBankDetails->branch_address : ''}}" placeholder="Bank Address">
                            @error("branch_address")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">IFSC Code</label>
                            <input type="text" class="form-control"   name="ifsc_code" value="{{ $vendorBankDetails->ifsc_code ? $vendorBankDetails->ifsc_code : ''}}"  placeholder="Bank Pincode">
                            @error("ifsc_code")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">UPI ID</label>
                            <input type="text" class="form-control"   name="upi_id" value="{{ $vendorBankDetails->upi_id ? $vendorBankDetails->upi_id : ''}}"  placeholder="Bank Number">
                            @error("upi_id")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Account Type</label>
                            <input type="text" class="form-control"   name="account_type" value="{{ $vendorBankDetails->account_type ? $vendorBankDetails->account_type : ''}}"  placeholder="Account Type">
                            @error("account_type")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Account Status</label>
                            <select class="form-control" name="account_status">
                                <option value="Select Status">Bank Account Status</option>
                                <option value="1" {{ $vendorBankDetails->account_status == 1 ? 'selected' : ''}}>Active</option>
                                <option value="0" {{ $vendorBankDetails->account_status == 0 ? 'selected' : ''}}>Deactive</option>
                            </select>
                            @error("account_status")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                   
                  </div>
                 
                  <button type="submit" class="mr-2 btn btn-primary">Update</button>
                </form>
              </div>
        
            </div>
        </div>
    </div>
</div>

@endsection