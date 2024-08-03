@extends("admin.layouts.app")
@section('meta')
<meta name="csrf_token" content="{{ csrf_token() }}" />
@endsection

@section("content")
<div class="content-wrapper">
    <div class="row">
        <div class="mb-5 col-12 col-xl-12 mb-xl-0">
            <h3 class="font-weight-bold">Vendor Business Details</h3>
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
                <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ route('vendor.update.business.details') }}">
                  @csrf
                  <div class="row">
                    <div class="col-md-6"> 
                        <div class="form-group">
                            <label for="exampleInputEmail1">Shop Name</label>
                            <input type="text" class="form-control" value="{{ $vendorBusinessDetails->shop_name ? $vendorBusinessDetails->shop_name : ''}}"  name="shop_name"  placeholder="Shop Name">
                            @error("shop_name")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Shop Email</label>
                            <input type="text" class="form-control"  name="shop_email" value="{{ $vendorBusinessDetails->shop_email ? $vendorBusinessDetails->shop_email : ''}}"  placeholder="Shop Email">
                            @error("shop_email")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Shop Country</label>
                            <input type="text" class="form-control"   name="shop_country" value="{{ $vendorBusinessDetails->shop_country ? $vendorBusinessDetails->shop_country : ''}}"  placeholder="Shop Country">
                            @error("shop_country")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Shop City</label>
                            <input type="text" class="form-control"   name="shop_city" value="{{ $vendorBusinessDetails->shop_city ? $vendorBusinessDetails->shop_city : ''}}"  placeholder="Shop City">
                            @error("shop_city")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Shop Address</label>
                            <input type="text" class="form-control"   name="shop_address" value="{{ $vendorBusinessDetails->shop_address ? $vendorBusinessDetails->shop_address : ''}}" placeholder="Shop Address">
                            @error("shop_address")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Shop Pincode</label>
                            <input type="text" class="form-control"   name="shop_pincode" value="{{ $vendorBusinessDetails->shop_pincode ? $vendorBusinessDetails->shop_pincode : ''}}"  placeholder="Shop Pincode">
                            @error("shop_pincode")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Shop Number</label>
                            <input type="text" class="form-control"   name="shop_number" value="{{ $vendorBusinessDetails->shop_number ? $vendorBusinessDetails->shop_number : ''}}"  placeholder="Shop Number">
                            @error("shop_number")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Shop Mobile Number</label>
                            <input type="text" class="form-control"   name="shop_mobile_number" value="{{ $vendorBusinessDetails->shop_mobile_number ? $vendorBusinessDetails->shop_mobile_number : ''}}"  placeholder="Shop Mobile Number">
                            @error("shop_mobile_number")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Shop License Number</label>
                            <input type="text" class="form-control"   name="shop_license_number" value="{{ $vendorBusinessDetails->shop_license_number ? $vendorBusinessDetails->shop_license_number : ''}}"  placeholder="Shop License Number">
                            @error("shop_license_number")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Shop Webite Url</label>
                            <input type="text" class="form-control"   name="shop_website_url" value="{{ $vendorBusinessDetails->shop_website_url ? $vendorBusinessDetails->shop_website_url : ''}}"  placeholder="Shop Webite Url">
                            @error("shop_website_url")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Shop Facebook Url</label>
                            <input type="text" class="form-control"   name="shop_facebook_url" value="{{ $vendorBusinessDetails->shop_facebook_url ? $vendorBusinessDetails->shop_facebook_url : ''}}"  placeholder="Shop Facebook Url">
                            @error("shop_facebook_url")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Shop Instagram Url</label>
                            <input type="text" class="form-control"   name="shop_instagram_url" value="{{ $vendorBusinessDetails->shop_instagram_url ? $vendorBusinessDetails->shop_instagram_url : ''}}" placeholder="Shop Instagram Url">
                            @error("shop_instagram_url")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Shop Twitter Url</label>
                            <input type="text" class="form-control"   name="shop_twitter_url" value="{{ $vendorBusinessDetails->shop_twitter_url ? $vendorBusinessDetails->shop_twitter_url : ''}}" placeholder="Shop Twitter Url">
                            @error("shop_twitter_url")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Shop Youtube Url</label>
                            <input type="text" class="form-control"   name="shop_youtube_url" value="{{ $vendorBusinessDetails->shop_youtube_url ? $vendorBusinessDetails->shop_youtube_url : ''}}"  placeholder="Shop Youtube Url">
                            @error("shop_youtube_url")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Shop Whatsapp Number</label>
                            <input type="text" class="form-control"   name="shop_whatsapp_number" value="{{ $vendorBusinessDetails->shop_whatsapp_number ? $vendorBusinessDetails->shop_whatsapp_number : ''}}"  placeholder="Shop Whatsapp Url">
                            @error("shop_whatsapp_number")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Shop GST Number</label>
                            <input type="text" class="form-control"   name="gst_number" value="{{ $vendorBusinessDetails->gst_number ? $vendorBusinessDetails->gst_number : ''}}"  placeholder="Shop GST Url">
                            @error("gst_number")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Shop Pan Number</label>
                            <input type="text"class="form-control" value="{{ $vendorBusinessDetails->pan_number ? $vendorBusinessDetails->pan_number : '' }}" name="pan_number"  placeholder="Shop Pan Url">
                            @error("pan_number")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        
                        <div class="mt-3 form-group">
                            <label for="exampleInputEmail1">NID Front Picture</label>
                            <input type="file" value="{{ $vendorBusinessDetails->nid_front ? $vendorBusinessDetails->nid_front : ''}}" class="form-control"   name="nid_front"  >
                           
                            @error("nid_front")
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                       
                        <div class=" form-group">
                            <label for="exampleInputEmail1">NID Back Picture</label>
                            <input type="file" class="form-control"   name="nid_back"  >
                            @error("nid_back")
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