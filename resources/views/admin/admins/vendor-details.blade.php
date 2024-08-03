@extends("admin.layouts.app")
@section("content")
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div style="height: 72px;" class="items-center bg-white border-0 rounded card-header d-flex justify-content-between">
                <h4 class="m-0 mt-3 card-title">Vendor Details</h4>
                <a href="{{ route('admin.vendors') }}" class="btn btn-primary"><i class="ti-back-left"></i></a>
              </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Vendors Business Details</h4>
                <div class="pt-3 table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          Shop Name
                        </th>
                        <td>
                            @if($vendorDetails["VendorBusinessDetail"]["shop_name"] != null)
                            {{ $vendorDetails["VendorBusinessDetail"]["shop_name"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>
                         Shop Email
                        </th>
                        <td>
                            @if($vendorDetails["VendorBusinessDetail"]["shop_email"] != null)
                            {{ $vendorDetails["VendorBusinessDetail"]["shop_email"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Shop Country</th>
                        <td>
                            @if($vendorDetails["VendorBusinessDetail"]["shop_country"] != null)
                            {{ $vendorDetails["VendorBusinessDetail"]["shop_country"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Shop City</th>
                        <td>
                            @if($vendorDetails["VendorBusinessDetail"]["shop_city"] != null)
                            {{ $vendorDetails["VendorBusinessDetail"]["shop_city"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Shop Address</th>
                        <td>
                            @if($vendorDetails["VendorBusinessDetail"]["shop_address"] != null)
                            {{ $vendorDetails["VendorBusinessDetail"]["shop_address"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Shop Pincode</th>
                        <td>
                            @if($vendorDetails["VendorBusinessDetail"]["shop_pincode"] != null)
                            {{ $vendorDetails["VendorBusinessDetail"]["shop_pincode"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Shop Number</th>
                        <td>
                            @if($vendorDetails["VendorBusinessDetail"]["shop_number"] != null)
                            {{ $vendorDetails["VendorBusinessDetail"]["shop_number"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Shop License Number</th>
                        <td>
                            @if($vendorDetails["VendorBusinessDetail"]["shop_license_number"] != null)
                            {{ $vendorDetails["VendorBusinessDetail"]["shop_license_number"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Shop Mobile Number</th>
                        <td>
                            @if($vendorDetails["VendorBusinessDetail"]["shop_mobile_number"] != null)
                            {{ $vendorDetails["VendorBusinessDetail"]["shop_mobile_number"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Shop Website Url</th>
                        <td>
                            @if($vendorDetails["VendorBusinessDetail"]["shop_website_url"] != null)
                            {{ $vendorDetails["VendorBusinessDetail"]["shop_website_url"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Shop Facebook Page</th>
                        <td>
                            @if($vendorDetails["VendorBusinessDetail"]["shop_facebook_url"] != null)
                            {{ $vendorDetails["VendorBusinessDetail"]["shop_facebook_url"] }}</td>
                            @else
                            <span>N/A</span>
                            @endif
                      </tr>
                      <tr>
                        <th>Shop Instagram </th>
                        <td>
                            @if($vendorDetails["VendorBusinessDetail"]["shop_instagram_url"] != null)
                            {{ $vendorDetails["VendorBusinessDetail"]["shop_instagram_url"] }}</td>
                            @else
                            <span>N/A</span>
                            @endif
                      </tr>
                      <tr>
                        <th>Shop Twitter </th>
                        <td>
                            @if($vendorDetails["VendorBusinessDetail"]["shop_twitter_url"] != null)
                            {{ $vendorDetails["VendorBusinessDetail"]["shop_twitter_url"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Shop Youtube </th>
                        <td>
                            @if($vendorDetails["VendorBusinessDetail"]["shop_youtube_url"] != null)
                            {{ $vendorDetails["VendorBusinessDetail"]["shop_youtube_url"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Shop Whatsapp </th>
                        <td>
                            @if($vendorDetails["VendorBusinessDetail"]["shop_whatsapp_number"] != null)
                            {{ $vendorDetails["VendorBusinessDetail"]["shop_whatsapp_number"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>GST Number </th>
                        <td>
                            @if($vendorDetails["VendorBusinessDetail"]["gst_number"] != null)
                            {{ $vendorDetails["VendorBusinessDetail"]["gst_number"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Pan Number </th>
                        <td>
                            @if($vendorDetails["VendorBusinessDetail"]["pan_number"] != null)
                            {{ $vendorDetails["VendorBusinessDetail"]["pan_number"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                            
                      </tr>
                      <tr>
                        <th>NID Card Front Page </th>
                        <td>
                            @if(!$vendorDetails["VendorBusinessDetail"]["nid_front"])
                                <span>N/A</span>
                            @else
                            <a href="{{ asset($vendorDetails["VendorBusinessDetail"]["nid_front"]) }}" target="_blank">
                                <img style="width: 50px; border-radius: 0%;" src="{{ asset($vendorDetails["VendorBusinessDetail"]["nid_front"]) }}" alt="nid_front">
                            </a>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>NID Card Back Page </th>
                        <td>
                            @if(!$vendorDetails["VendorBusinessDetail"]["nid_back"])
                                <span>N/A</span>
                            @else
                            <a href="{{ asset($vendorDetails["VendorBusinessDetail"]["nid_back"]) }}" target="_blank">
                                <img style="width: 50px; border-radius: 0%;" src="{{ asset($vendorDetails["VendorBusinessDetail"]["nid_back"]) }}" alt="nid_back">
                            </a>
                            @endif
                        </td>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Vendors Bank Details</h4>
                <div class="pt-3 table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          Bank Name
                        </th>
                        <td>
                            @if($vendorDetails["VendorBankDetail"]["bank_name"] != null)
                            {{ $vendorDetails["VendorBankDetail"]["bank_name"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>
                         Bank Account Name
                        </th>
                        <td>
                            @if($vendorDetails["VendorBankDetail"]["account_name"] != null)
                            {{ $vendorDetails["VendorBankDetail"]["account_name"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Shop Account Number</th>
                        <td>
                            @if($vendorDetails["VendorBankDetail"]["account_number"] != null)
                            {{ $vendorDetails["VendorBankDetail"]["account_number"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Brunch Name</th>
                        <td>
                            @if($vendorDetails["VendorBankDetail"]["branch_name"] != null)
                            {{ $vendorDetails["VendorBankDetail"]["branch_name"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Brunch Address</th>
                        <td>
                            @if($vendorDetails["VendorBankDetail"]["branch_address"] != null)
                            {{ $vendorDetails["VendorBankDetail"]["branch_address"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>IFIC Code</th>
                        <td>
                            @if($vendorDetails["VendorBankDetail"]["ifsc_code"] != null)
                            {{ $vendorDetails["VendorBankDetail"]["ifsc_code"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>UPI ID</th>
                        <td>
                            @if($vendorDetails["VendorBankDetail"]["upi_id"] != null)
                            {{ $vendorDetails["VendorBankDetail"]["upi_id"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Account Type</th>
                        <td>
                            @if($vendorDetails["VendorBankDetail"]["account_type"] != null)
                            {{ $vendorDetails["VendorBankDetail"]["account_type"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Account Status</th>
                        <td>
                            @if($vendorDetails["VendorBankDetail"]["account_status"] != null)
                                @if($vendorDetails["VendorBankDetail"]["account_status"]==0)
                                <span class="badge badge-danger">Inactive</span>
                                @else
                                <span class="badge badge-success">Active</span>
                                @endif
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                    
                    </thead>
                  </table>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Vendors Personal Details</h4>
                <div class="pt-3 table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          Vendor Name
                        </th>
                        <td>
                            @if($vendorDetails["name"] != null)
                            {{ $vendorDetails["name"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>
                         Vendor Email
                        </th>
                        <td>
                            @if($vendorDetails["email"] != null)
                            {{ $vendorDetails["email"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Vendor Mobile </th>
                        <td>
                            @if($vendorDetails["mobile"] != null)
                            {{ $vendorDetails["mobile"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Country</th>
                        <td>
                            {{ $vendorDetails["country"] }}
                            
                        </td>
                      </tr>
                      <tr>
                        <th>City</th>
                        <td>
                            @if($vendorDetails["city"] != null)
                            {{ $vendorDetails["city"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Address</th>
                        <td>
                            @if($vendorDetails["address"] != null)
                            {{ $vendorDetails["address"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Postcode</th>
                        <td>
                            @if($vendorDetails["pincode"] != null)
                            {{ $vendorDetails["pincode"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection